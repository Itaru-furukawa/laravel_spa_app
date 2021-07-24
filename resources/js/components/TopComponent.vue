<template>
    <div class="container">
        <div style="margin: 20px 0;">
            <router-link v-bind:to="{name: 'create'}">
                <button style="padding:20px 0" class="btn btn-primary btn-lg btn-block">葬儀の新規登録（顧客登録）</button>
            </router-link>
        </div>
        <div style="margin: 20px 0;">
            <router-link v-bind:to="{name: 'list'}">
                <button style="padding:20px 0" class="btn btn-warning btn-lg btn-block">葬儀・顧客情報の編集</button>
            </router-link>
        </div>
        <div style="margin: 20px 0;">
            <router-link v-bind:to="{name: 'customer'}">
                <button style="padding:20px 0" class="btn btn-danger btn-lg btn-block">顧客一覧</button>
            </router-link>
        </div>
        <div style="margin: 20px 0;">
            <router-link v-bind:to="{name: 'manage'}">
                <button style="padding:20px 0" class="btn btn-success btn-lg btn-block">会社名・斎場名の編集</button>
            </router-link>
        </div>
        <div style="margin: 20px 0;">
            <router-link v-bind:to="{name: 'shijuukunichi'}">
                <button style="padding:20px 0" class="btn btn-secondary btn-lg btn-block">四十九日の法要</button>
            </router-link>
        </div>
        <canvas id="canvassample" ref="canvas" width="500" height="300"></canvas>
        <div style="padding:10px">
        <button type="button" v-on:click="clearCanvas()">リセット</button>
        <button type="button" onclick="prevCanvas()">戻る</button>
        <button type="button" onclick="nextCanvas()">進む</button>
        </div>
        <div style="padding:10px">
        <button type="button" v-on:click="saveCanvas('canvassample')" value="1">画像変換</button>
        </div>
        <h2>画像出力</h2> 
        <div id="img-box"><img id="newImg"></div>
    </div>
    
</template>

<script>

   export default {
       data:function(){
           return{
               myStorage : [],
               conb : "dataのtestなり",
               canvas : [],
               ctx : []
           }
       },
    mounted(){
        this.canvas = this.$refs.canvas;
        this.ctx = this.canvas.getContext('2d');
        var canvas = document.getElementById('canvassample'),
            ctx = canvas.getContext('2d'),
            moveflg = 0,
            Xpoint,
            Ypoint;
        this.canvas = canvas;
        this.ctx = ctx;
        //初期値（サイズ、色、アルファ値）の決定
        var defSize = 7,
            defColor = "#555";
        
        
        // ストレージの初期化
        this.myStorage = localStorage;
        var myStorage = localStorage;
        window.onload = this.initLocalStorage();
        
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
            setLocalStorage();
        }
    
        
        function chgImg()
        {
        var png = this.canvas.toDataURL();
        
        document.getElementById("newImg").src = png;
        }
        
        function initLocalStorage(){
            this.myStorage.setItem("__log", JSON.stringify([]));
        }
        function setLocalStorage(){
            var png = canvas.toDataURL();
            var logs = JSON.parse(myStorage.getItem("__log"));
        
            setTimeout(function(){
                logs.unshift({0:png});
        
                myStorage.setItem("__log", JSON.stringify(logs));
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
                    this.myStorage.setItem("__log", JSON.stringify(logs));
                    resetCanvas();
        
                    draw(logs[0]['png']);
        
                }, 0);
            }
        }
        
        function draw(src) {
            var img = new Image();
            img.src = src;
        
            img.onload = function() {
                this.ctx.drawImage(img, 0, 0);
            }
        }
        function resetCanvas() {
            ctx.clearRect(0, 0, ctx.canvas.clientWidth, ctx.canvas.clientHeight);
        }
    },
    beforeDestroy () {
        document.removeEventListener("mousemove", this.someEventHandler);
        // PC対応
        canvas.removeEventListener('mousedown', startPoint, false);
        canvas.removeEventListener('mousemove', movePoint, false);
        canvas.removeEventListener('mouseup', endPoint, false);
        // スマホ対応
        canvas.removeEventListener('touchstart', startPoint, false);
        canvas.removeEventListener('touchmove', movePoint, false);
        canvas.removeEventListener('touchend', endPoint, false);
    },
    methods: {
        clearCanvas(){
            if(confirm('Canvasを初期化しますか？'))
            {
                this.initLocalStorage();
                this.resetCanvas();
            }
        },
        resetCanvas() {
            var ctx = this.ctx;
            var canvas = this.canvas;
            ctx.clearRect(0, 0, ctx.canvas.clientWidth, ctx.canvas.clientHeight);
        },
        initLocalStorage(){
            this.myStorage.setItem("__log", JSON.stringify([]));
        },
        saveCanvas(canvas_id)
        {
            //アンカータグを作成
            var a = document.createElement('a');
            //canvasをJPEG変換し、そのBase64文字列をhrefへセット
            a.href = this.canvas.toDataURL('image/jpeg', 0.85);
            //ダウンロード時のファイル名を指定
            a.download = 'download.jpg';
            //クリックイベントを発生させる
            a.click();
        }
    }
   }

</script>

    
<style>
    canvas {
  border:3px solid #000;
}
</style>