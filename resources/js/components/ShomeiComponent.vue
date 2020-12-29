<template>
    <div class="container">
        <canvas id="canvassample" width="500" height="300"></canvas>
        <div style="padding:10px">
        <button type="button" onclick="clearCanvas()">リセット</button>
        <button type="button" onclick="prevCanvas()">戻る</button>
        <button type="button" onclick="nextCanvas()">進む</button>
        </div>
        <div style="padding:10px">
        <button type="button" onclick="saveCanvas('canvassample')" value="1">画像変換</button>
        </div>
        <h2>画像出力</h2> 
        <div id="img-box"><img id="newImg"></div>
    </div>
</template>
<style>
canvas {
  border:3px solid #000;
}
</style>
<script>
    export default {
        data(){
            return{
                sougi : []
            } 
        },
        methods:{
            getSougis(){
                axios.get('/api/list')
                    .then((res)=>{
                        this.sougi = res.data;
                    });
            }
        },
        mounted(){
            this.getSougis();
        }
    }

</script>
<script>
var canvas = document.getElementById('canvassample'),
    ctx = canvas.getContext('2d'),
    moveflg = 0,
    Xpoint,
    Ypoint;
 
//初期値（サイズ、色、アルファ値）の決定
var defSize = 7,
    defColor = "#555";
 
 
// ストレージの初期化
var myStorage = localStorage;
window.onload = initLocalStorage();
 
// PC対応
canvas.addEventListener('mousedown', startPoint, false);
canvas.addEventListener('mousemove', movePoint, false);
canvas.addEventListener('mouseup', endPoint, false);
// スマホ対応
canvas.addEventListener('touchstart', startPoint, false);
canvas.addEventListener('touchmove', movePoint, false);
canvas.addEventListener('touchend', endPoint, false);
 
function startPoint(e){
  e.preventDefault();
  ctx.beginPath();
 
  Xpoint = e.layerX;
  Ypoint = e.layerY;
   
  ctx.moveTo(Xpoint, Ypoint);
}
 
function movePoint(e){
  if(e.buttons === 1 || e.witch === 1 || e.type == 'touchmove')
  {
    Xpoint = e.layerX;
    Ypoint = e.layerY;
    moveflg = 1;
     
    ctx.lineTo(Xpoint, Ypoint);
    ctx.lineCap = "round";
    ctx.lineWidth = defSize * 2;
    ctx.strokeStyle = defColor;
    ctx.stroke();
     
  }
}
 
function endPoint(e)
{
 
    if(moveflg === 0)
    {
       ctx.lineTo(Xpoint-1, Ypoint-1);
       ctx.lineCap = "round";
       ctx.lineWidth = defSize * 2;
       ctx.strokeStyle = defColor;
       ctx.stroke();
        
    }
    moveflg = 0;
  setLocalStoreage();
}
 
function clearCanvas(){
    if(confirm('Canvasを初期化しますか？'))
    {
        initLocalStorage();
        temp = [];
        resetCanvas();
    }
}
 
function resetCanvas() {
    ctx.clearRect(0, 0, ctx.canvas.clientWidth, ctx.canvas.clientHeight);
}
 
function chgImg()
{
  var png = canvas.toDataURL();
 
  document.getElementById("newImg").src = png;
}
 
function initLocalStorage(){
    myStorage.setItem("__log", JSON.stringify([]));
}
function setLocalStoreage(){
    var png = canvas.toDataURL();
    var logs = JSON.parse(myStorage.getItem("__log"));
 
    setTimeout(function(){
        logs.unshift({0:png});
 
        myStorage.setItem("__log", JSON.stringify(logs));
 
        currentCanvas = 0;
        temp = [];
    }, 0);
}
 
function prevCanvas(){
    var logs = JSON.parse(myStorage.getItem("__log"));
 
    if(logs.length > 0)
    {
        temp.unshift(logs.shift());
 
        setTimeout(function(){
            myStorage.setItem("__log", JSON.stringify(logs));
            resetCanvas();
 
            draw(logs[0]['png']);
 
        }, 0);
    }
}
 
function nextCanvas(){
    var logs = JSON.parse(myStorage.getItem("__log"));
 
    if(temp.length > 0)
    {
        logs.unshift(temp.shift());
 
        setTimeout(function(){
            myStorage.setItem("__log", JSON.stringify(logs));
            resetCanvas();
 
            draw(logs[0]['png']);
 
        }, 0);
    }
}
 
function draw(src) {
    var img = new Image();
    img.src = src;
 
    img.onload = function() {
        ctx.drawImage(img, 0, 0);
    }
}

function saveCanvas(canvas_id)
{
	var canvas = document.getElementById(canvas_id);
	//アンカータグを作成
	var a = document.createElement('a');
	//canvasをJPEG変換し、そのBase64文字列をhrefへセット
	a.href = canvas.toDataURL('image/jpeg', 0.85);
	//ダウンロード時のファイル名を指定
	a.download = 'download.jpg';
	//クリックイベントを発生させる
	a.click();
}

</script>