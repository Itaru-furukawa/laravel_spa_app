<template>
    <div class="container">
        <LoadingBar v-show="loading1 || loading2 || loading3"></LoadingBar>
        <div class="row justify-content-center" v-show="!loading1 && !loading2 && !loading3">
            <div class="col-sm-6">
                <form v-on:submit.prevent="submit">
                    <div class="form-group label_block">
                            <label for="inputSouka">担当者名</label>
                            <input type="text" class="form-control" id="inputSouka" placeholder="(例)山田" v-model="sougi.employeeName">
                            </div>
                    <div class="label_block">
                        <label for="reqYear">扱い社名</label>
                        <select id="reqYear" class="form-control" v-model="sougi.compId">
                            <option v-for="comp in comps" :value="comp.id">{{comp.name}}</option>
                        </select>
                    </div>
                    <div class="label_top">依頼年月日</div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="reqYear">年</label>
                            <select id="reqYear" class="form-control" v-model="sougi.reqYear">
                                <option selected>Choose...</option>
                                <option v-for="n in 20" :value="n + parseInt(sougi.todayYear,10) - 15">{{ n + parseInt(sougi.todayYear,10) - 15}}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="reqMonth">月</label>
                            <select id="reqMonth" class="form-control" v-model="sougi.reqMonth">
                                <option selected>Choose...</option>
                                <option v-for="n in 12" :value="n">{{ n }}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="reqDay">日</label>
                            <select id="reqDay" class="form-control" v-model="sougi.reqDay">
                                <option selected>Choose...</option>
                                <option v-for="n in 31" :value="n">{{ n }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="label_top">通夜式</div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="tuyaYear">年</label>
                            <select id="tuyaYear" class="form-control" v-model="sougi.tuyaYear">
                                <option selected>Choose...</option>
                                <option v-for="n in 20" :value="n+2005">{{ n + 2005}}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tuyaMonth">月</label>
                            <select id="tuyaMonth" class="form-control" v-model="sougi.tuyaMonth">
                                <option selected>Choose...</option>
                                <option v-for="n in 12" :value="n">{{ n }}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tuyaDay">日</label>
                            <select id="tuyaDay" class="form-control" v-model="sougi.tuyaDay">
                                <option selected>Choose...</option>
                                <option v-for="n in 31" :value="n">{{ n }}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tuyaHours">開始時</label>
                            <select id="tuyaHours" class="form-control" v-model="sougi.tuyaHours">
                                <option selected>Choose...</option>
                                <option v-for="n in 24" :value="n-1">{{ n - 1 }}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tuyaMins">開始分</label>
                            <select id="tuyaMins" class="form-control" v-model="sougi.tuyaMins">
                                <option selected>Choose...</option>
                                <option v-for="n in 12" :value="n*5">{{ n*5 - 5 }}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tuyaHourf">終了時</label>
                            <select id="tuyaHourf" class="form-control" v-model="sougi.tuyaHourf">
                                <option selected>Choose...</option>
                                <option v-for="n in 24" :value="n-1">{{ n - 1 }}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tuyaMinf">終了分</label>
                            <select id="tuyaMinf" class="form-control" v-model="sougi.tuyaMinf">
                                <option selected>Choose...</option>
                                <option v-for="n in 12" :value="n*5">{{ n*5 - 5 }}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tuyaHourg">集合時</label>
                            <select id="tuyaHourg" class="form-control" v-model="sougi.tuyaHourg">
                                <option selected>Choose...</option>
                                <option v-for="n in 24" :value="n - 1">{{ n - 1 }}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tuyaMing">集合分</label>
                            <select id="tuyaMing" class="form-control" v-model="sougi.tuyaMing">
                                <option selected>Choose...</option>
                                <option v-for="n in 12" :value="n*5">{{ n*5 - 5 }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="label_top">告別式</div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="kokubetsuYear">年</label>
                            <select id="kokubetsuYear" class="form-control" v-model="sougi.kokubetsuYear">
                                <option selected>Choose...</option>
                                <option v-for="n in 20" :value="n + 2005">{{ n + 2005}}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="kokubetsuMonth">月</label>
                            <select id="kokubetsuMonth" class="form-control" v-model="sougi.kokubetsuMonth">
                                <option selected>Choose...</option>
                                <option v-for="n in 12" :value="n">{{ n }}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="kokubetsuDay">日</label>
                            <select id="kokubetsuDay" class="form-control" v-model="sougi.kokubetsuDay">
                                <option selected>Choose...</option>
                                <option v-for="n in 31" :value="n">{{ n }}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="kokubetsuHours">開始時</label>
                            <select id="kokubetsuHours" class="form-control" v-model="sougi.kokubetsuHours">
                                <option selected>Choose...</option>
                                <option v-for="n in 24" :value="n - 1">{{ n - 1 }}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="kokubetsuMins">開始分</label>
                            <select id="kokubetsuMins" class="form-control" v-model="sougi.kokubetsuMins">
                                <option selected>Choose...</option>
                                <option v-for="n in 12" :value="n*5">{{ n*5 - 5 }}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="kokubetsuHourf">終了時</label>
                            <select id="kokubetsuHourf" class="form-control" v-model="sougi.kokubetsuHourf">
                                <option selected>Choose...</option>
                                <option v-for="n in 24" :value="n - 1">{{ n - 1 }}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="kokubetsuMinf">終了分</label>
                            <select id="kokubetsuMinf" class="form-control" v-model="sougi.kokubetsuMinf">
                                <option selected>Choose...</option>
                                <option v-for="n in 12" :value="n * 5">{{ n*5-5 }}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="kokubetsuHourg">集合時</label>
                            <select id="kokubetsuHourg" class="form-control" v-model="sougi.kokubetsuHourg">
                                <option selected>Choose...</option>
                                <option v-for="n in 24" :value="n - 1">{{ n - 1 }}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="kokubetsuMing">集合分</label>
                            <select id="kokubetsuMing" class="form-control" v-model="sougi.kokubetsuMing">
                                <option selected>Choose...</option>
                                <option v-for="n in 12" :value="n * 5">{{ n*5-5 }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="label_top">火葬式</div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="kasouYear">年</label>
                            <select id="kasouYear" class="form-control" v-model="sougi.kasouYear">
                                <option selected>Choose...</option>
                                <option v-for="n in 20" :value="n + 2005">{{ n + 2005}}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="kasouMonth">月</label>
                            <select id="kasouMonth" class="form-control" v-model="sougi.kasouMonth">
                                <option selected>Choose...</option>
                                <option v-for="n in 12" :value="n">{{ n }}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="kasouDay">日</label>
                            <select id="kasouDay" class="form-control" v-model="sougi.kasouDay">
                                <option selected>Choose...</option>
                                <option v-for="n in 31" :value="n">{{ n }}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="kasouHours">開始時</label>
                            <select id="kasouHours" class="form-control" v-model="sougi.kasouHours">
                                <option selected>Choose...</option>
                                <option v-for="n in 24" :value="n - 1">{{ n - 1 }}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="kasouMins">開始分</label>
                            <select id="kasouMins" class="form-control" v-model="sougi.kasouMins">
                                <option selected>Choose...</option>
                                <option v-for="n in 12" :value="n * 5">{{ n*5-5 }}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="kasouHourf">終了時</label>
                            <select id="kasouHourf" class="form-control" v-model="sougi.kasouHourf">
                                <option selected>Choose...</option>
                                <option v-for="n in 24" :value="n -1">{{ n - 1 }}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="kasouMinf">終了分</label>
                            <select id="kasouMinf" class="form-control" v-model="sougi.kasouMinf">
                                <option selected>Choose...</option>
                                <option v-for="n in 12" :value="n*5">{{ n*5-5 }}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="kasouHourg">集合時</label>
                            <select id="kasouHourg" class="form-control" v-model="sougi.kasouHourg">
                                <option selected>Choose...</option>
                                <option v-for="n in 24" :value="n -1">{{ n - 1 }}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="kasouMing">集合分</label>
                            <select id="kasouMing" class="form-control" v-model="sougi.kasouMing">
                                <option selected>Choose...</option>
                                <option v-for="n in 12" :value="n * 5">{{ n*5-5 }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="info_tag">故人様の情報</div>
                    <div class="moshu">
                        <div class="label_block">
                            <div class="form-group">
                                <label for="spell1">喪家名（よみかた）</label>
                                <input type="text" class="form-control" id="soukaSpell" placeholder="(例)ときわだい" v-model="sougi.soukaSpell">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">喪家名</label>
                                <input type="text" class="form-control" id="soukaName" placeholder="(例)常盤台" v-model="sougi.soukaName">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">故人名（よみかた）</label>
                                <input type="text" class="form-control" id="kojinSpell" placeholder="(例)ときわだい たかこ" v-model="sougi.kojinSpell">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">故人名</label>
                                <input type="text" class="form-control" id="kojinName" placeholder="(例)常盤台 貴子" v-model="sougi.kojinName">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">住民登録地</label>
                                <input type="text" class="form-control" id="kojinAddress" placeholder="(例)東京都板橋区常盤台1-2-3" v-model="sougi.kojinAddress">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">世帯主</label>
                                <input type="text" class="form-control" id="kojinHead" placeholder="(例)常盤台 太郎" v-model="sougi.kojinHead">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">本籍地</label>
                                <input type="text" class="form-control" id="kojinPermAddress" placeholder="(例)常盤台" v-model="sougi.kojinPermAddress">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">筆頭者</label>
                                <input type="text" class="form-control" id="kojinPrinciple" placeholder="(例)常盤台" v-model="sougi.kojinPrinciple">
                            </div>
                            
                        </div>
                        <div class="label_top">配偶者</div>
                        <div class="form-row">
                            <div class="form-group col-md-4 radio_spouse">
                                <input type="radio" checked id="one" value="いる" v-model="sougi.spouse">
                                <label for="one">いる</label>
                                <br>
                                <input type="radio"id="two" value="いない" v-model="sougi.spouse">
                                <label for="two">いない</label>
                            </div>
                            <div class="form-group col-md-4" v-if="sougi.spouse === 'いる'">
                                <label for="spouseAge">満年齢</label>
                                <input type="number" class="form-control" id="spouseAge" v-model="sougi.spouseAge">
                            </div>
                            <div class="form-group col-md-4" v-else>
                                <label for="reqDay">状況</label>
                                <select id="reqDay" class="form-control" v-model="sougi.spouseStatus">
                                    <option value="未婚">未婚</option>
                                    <option value="死別">死別</option>
                                    <option value="離別">離別</option>
                                </select>
                            </div>
                        </div>
                        <div class="label_top">生年月日（故人）</div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="tuyaYear">年</label>
                                <input type="number" class="form-control" id="inputAge1" placeholder="(例)1960" v-model="sougi.kojinBirthYear">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="tuyaMonth">月</label>
                                <input type="number" class="form-control" id="inputAge2" placeholder="(例)1" v-model="sougi.kojinBirthMonth">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="tuyaDay">日</label>
                                <input type="number" class="form-control" id="inputAge3" placeholder="(例)20" v-model="sougi.kojinBirthDay">
                            </div>
                            <div class="age_form"><input type="hidden" class="form-control" v-model="sougi.kojinAge">満{{age1}}歳</div>
                        </div>
                        <div class="label_top">性別</div>
                        <div class="form-group radio_spouse sex">
                            <input type="radio" checked id="male" value="男性" v-model="sougi.kojinSex">
                            <label for="male">男性</label>
                            <input type="radio"id="female" value="女性" v-model="sougi.kojinSex">
                            <label for="female">女性</label>
                        </div>
                        <div class="label_top">死亡したとき</div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="tuyaYear">年</label>
                                <select id="tuyaYear" class="form-control" v-model="sougi.deadYear">
                                    <option>Choose...</option>
                                    <option v-for="n in 15" :value="sougi.todayYear -15 + n">{{ sougi.todayYear -15 + n}}</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tuyaMonth">月</label>
                                <select id="tuyaMonth" class="form-control" v-model="sougi.deadMonth">
                                    <option>Choose...</option>
                                    <option v-for="i in 12" :value="i">{{i}}</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tuyaDay">日</label>
                                <select id="tuyaDay" class="form-control" v-model="sougi.deadDay">
                                    <option>Choose...</option>
                                    <option v-for="i in 31" :value="i">{{i}}</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tuyaHour">時</label>
                                <select id="tuyaHour" class="form-control" v-model="sougi.deadHour">
                                    <option selected>Choose...</option>
                                    <option v-for="n in 24" :value="n-1">{{ n - 1 }}</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tuyaDay">分</label>
                                <select id="tuyaDay" class="form-control" v-model="sougi.deadMin">
                                    <option selected>Choose...</option>
                                    <option v-for="n in 12" :value="n*5">{{ n*5 - 5}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="info_tag">喪主様の情報</div>
                    <div class="moshu">
                        <div class="label_block">
                            <div class="form-group">
                                <label for="inputSouka">喪主名（よみかた）</label>
                                <input type="text" class="form-control" id="inputSouka" placeholder="(例)ときわだい" v-model="sougi.moshuSpell">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">喪主名</label>
                                <input type="text" class="form-control" id="inputSouka2" placeholder="(例)常盤台" v-model="sougi.moshuName">
                            </div>
                        </div>
                        <div class="label_top">生年月日（喪主）</div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="tuyaYear">年</label>
                                <input type="number" class="form-control" id="inputAge1" placeholder="(例)1960" v-model="sougi.moshuBirthYear">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="tuyaMonth">月</label>
                                <input type="number" class="form-control" id="inputAge2" placeholder="(例)1" v-model="sougi.moshuBirthMonth">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="tuyaDay">日</label>
                                <input type="number" class="form-control" id="inputAge3" placeholder="(例)20" v-model="sougi.moshuBirthDay">
                            </div>
                            <div class="age_form">満{{age2}}歳</div>
                        </div>
                        <div class="label_block">
                            <div class="form-group">
                                <label for="inputAddress">続柄</label>
                                <input type="text" class="form-control col-md-2" placeholder="(例)夫" v-model="sougi.moshuRelation">
                            </div>
                            <div>
                                <div class="form-group">
                                    <label for="inputAddress">メールアドレス</label>
                                    <input type="text" class="form-control" placeholder="(例)celeste@icloud.me.com" v-model="sougi.moshuMail">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">電話番号</label>
                                    <input type="text" class="form-control" placeholder="(例)03-0000-0000" v-model="sougi.moshuTel1">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">携帯電話</label>
                                    <input type="text" class="form-control" placeholder="(例)03-0000-0000" v-model="sougi.moshuTel2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">住民登録地</label>
                                <input type="text" class="form-control" id="inputSouka2" placeholder="(例)常盤台" v-model="sougi.moshuAddress">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">世帯主</label>
                                <input type="text" class="form-control" id="inputSouka2" placeholder="(例)常盤台" v-model="sougi.moshuHead">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">本籍地</label>
                                <input type="text" class="form-control" id="inputSouka2" placeholder="(例)常盤台" v-model="sougi.moshuPermAddress">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">筆頭者</label>
                                <input type="text" class="form-control" id="inputSouka2" placeholder="(例)常盤台" v-model="sougi.moshuPrinciple">
                            </div>
                        </div>
                    </div>
                    <div class="info_tag">届出人様の情報</div>
                    <div class="moshu">
                        <div class="label_block">
                            <div class="form-group">
                                <label for="inputSouka">届出人名（よみかた）</label>
                                <input type="text" class="form-control" id="inputSouka" placeholder="(例)ときわだい" v-model="sougi.repSpell">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">届出人名</label>
                                <input type="text" class="form-control" id="inputSouka2" placeholder="(例)常盤台" v-model="sougi.repName">
                            </div>
                        </div>
                        <div class="label_top">生年月日（届出人）</div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="tuyaYear">年</label>
                                <input type="number" class="form-control" id="inputAge1" placeholder="(例)1960" v-model="sougi.repBirthYear">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="tuyaMonth">月</label>
                                <input type="number" class="form-control" id="inputAge2" placeholder="(例)1" v-model="sougi.repBirthMonth">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="tuyaDay">日</label>
                                <input type="number" class="form-control" id="inputAge3" placeholder="(例)20" v-model="sougi.repBirthDay">
                            </div>
                            <div class="age_form">満{{age3}}歳</div>
                        </div>
                        <div class="label_block">
                            <div class="form-group">
                                <label for="inputAddress">続柄</label>
                                <input type="text" class="form-control col-md-2" placeholder="(例)夫" v-model="sougi.repRelation">
                            </div>
                            <div>
                                <div class="form-group">
                                    <label for="inputAddress">電話番号</label>
                                    <input type="text" class="form-control" placeholder="(例)03-0000-0000" v-model="sougi.repTel1">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">携帯電話</label>
                                    <input type="text" class="form-control" placeholder="(例)03-0000-0000" v-model="sougi.repTel2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">住民登録地</label>
                                <input type="text" class="form-control" id="inputSouka2" placeholder="(例)常盤台" v-model="sougi.repAddress">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">世帯主</label>
                                <input type="text" class="form-control" id="inputSouka2" placeholder="(例)常盤台" v-model="sougi.repHead">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">本籍地</label>
                                <input type="text" class="form-control" id="inputSouka2" placeholder="(例)常盤台" v-model="sougi.repPermAddress">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">筆頭者</label>
                                <input type="text" class="form-control" id="inputSouka2" placeholder="(例)常盤台" v-model="sougi.repPrinciple">
                            </div>
                        </div>
                    </div>
                    <div class="info_tag">請求情報</div>
                    <div class="moshu">
                        <div class="label_block">
                            <div class="form-group">
                                <label for="inputAddress">請求先名</label>
                                <input type="text" class="form-control" id="inputSouka2" placeholder="(例)常盤台"　v-model="sougi.demName">
                            </div>
                            <div>
                                <div class="form-group">
                                    <label for="inputAddress">電話番号</label>
                                    <input type="text" class="form-control" placeholder="(例)03-0000-0000" v-model="sougi.demTel">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">請求先ご住所</label>
                                <input type="text" class="form-control" id="inputSouka2" placeholder="(例)常盤台" v-model="sougi.demAddress">
                            </div>
                            
                        </div>
                        <div class="label_top">精算方法</div>
                        <div class="form-group pay_way">
                            <input type="radio" value="振込" id="pay1" v-model="sougi.payWay">
                            <label for="pay1">振込</label>
                            <input type="radio" value="集金" id="pay2" v-model="sougi.payWay">
                            <label for="pay2">集金</label>
                            <input type="radio" value="当日" id="pay3" v-model="sougi.payWay">
                            <label for="pay3">当日</label>
                        </div>
                    </div>
                    <div class="info_tag">その他</div>
                    <div class="moshu">
                        <div class="label_block">
                            <div class="form-group">
                                <label for="inputAddress">式場名</label>
                                <select class="form-control" v-model="sougi.cereId">
                                    <option v-for="cere in ceres" :value="cere.id">{{cere.name}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">火葬場</label>
                                <select class="form-control" v-model="sougi.creId">
                                    <option v-for="cre in cres" :value="cre.id">{{cre.name}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">宗派・寺院名</label>
                                <input type="text" class="form-control" v-model="sougi.shuha">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">御布施</label>
                                <input type="text" class="form-control" v-model="sougi.ohuse">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">返礼品</label>
                                <input type="text" class="form-control" v-model="sougi.returnItem">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">特筆事項</label>
                                <div>
                                    <textarea placeholder="Enterで複数行入力することができます" class="col-md-12 tx-area" v-model="sougi.specialArea"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button v-bind:disabled="isProcessing" type="submit" class="btn btn-primary btn-lg btn-block">入力完了</button>
                </form>
            </div>
        </div>

    </div>
</template>


<script>
import moment from 'moment';
import LoadingBar from './LoadingBar';
export default {
    props : {
        sougiId : String
    },
    data:function() {
        return {
            sougi : {
                "sex" :'male',
                "spouse" :'いる',
                "dead_month": '12',
                "spouseStatus": '未婚',
                "date" : moment(),
                "today" : moment().format(),
                "kojinBirthYear" : '1950',
                "kojinBirthMonth" : '01' ,
                "kojinBirthDay" : '01',
                "moshuBirthYear" : '1950',
                "moshuBirthMonth" : '01' ,
                "moshuBirthDay" : '01',
                "repBirthYear" : '1950',
                "repBirthMonth" : '01' ,
                "repBirthDay" : '01',
                "payWay" : '振込',
                "cereIndex" : 0,
                "creIndex" : 0,
            },
            comps:{},
            cres:{},
            ceres:[],
            emptyEstimate : {},
            loading1 : true,
            loading2 : true,
            loading3 : true,
            loading4 : true,
        }
    },
    computed: {
        age1(){
            this.sougi.kojinAge = moment().diff(this.sougi.kojinBirthYear + '-' + this.sougi.kojinBirthMonth + '-' + this.sougi.kojinBirthDay, 'years');
            return moment().diff(this.sougi.kojinBirthYear + '-' + this.sougi.kojinBirthMonth + '-' + this.sougi.kojinBirthDay, 'years');
        },
        age2(){
            return moment().diff(this.sougi.moshuBirthYear + '-' + this.sougi.moshuBirthMonth + '-' + this.sougi.moshuBirthDay, 'years');
        },
        age3(){
            return moment().diff(this.sougi.repBirthYear + '-' + this.sougi.repBirthMonth + '-' + this.sougi.repBirthDay, 'years');
        }
    },
    filters: {
        moment: function (date) {
            return moment(date).format('YYYY/MM/DD HH:mm');
        }
    },
    methods: {
        submit(){
            axios.put('/api/list/' + this.sougiId,this.sougi)
                .then((res) =>{
                    this.$router.push({name: 'list'});
                });
        },
        getSougi(){
            axios.get('/api/list/' + this.sougiId)
                .then((res) =>{
                    this.loading4 = false;
                    this.sougi = res.data;
                    let year = moment().format('YYYY');
                    let month = moment().format('MM');
                    let today = moment().format('DD');
                    this.sougi.reqYear = year;
                    this.sougi.reqMonth = month;
                    this.sougi.reqDay = today;
                    this.sougi.tuyaYear = year;
                    this.sougi.tuyaMonth = month;
                    this.sougi.tuyaDay = today;
                    this.sougi.kasouYear = year;
                    this.sougi.kasouMonth = month;
                    this.sougi.kasouDay = today;
                    this.sougi.kokubetsuYear = year;
                    this.sougi.kokubetsuMonth = month;
                    this.sougi.kokubetsuDay = today;
                    this.sougi.todayYear = year;
                    this.sougi.dead_year = year;
                    this.sougi.dead_month = month;
                    this.sougi.dead_day = today;
                });
        },
        getComps(){
            axios.get('/api/manage/show1')
                .then((res)=>{
                    this.loading1 = false;
                    this.comps = res.data;
                });
        },
        getCeres(){
            axios.get('/api/manage/show2')
                .then((res)=>{
                    this.loading2 = false;
                    this.ceres = res.data;
                });
        },
        getCres(){
            axios.get('/api/manage/show3')
                .then((res)=>{
                    this.loading3 = false;
                    this.cres = res.data;
                });
        },
    },
    created(){
        this.getComps();
        this.getCeres();
        this.getCres();
        this.getSougi();
        
    },
    components:{
        LoadingBar,
    }
};
</script>

<style>
    form{
        margin-bottom:200px;
    }
    .label_top{
        margin-top:20px;
        font-weight:bold;
        font-size :17px;
    }
    .label_block label{
        font-size:17px;
        font-weight: bold;
    }
    .radio_spouse{
        margin-top: 10px;
    }
    .age_form{
        font-size :18px;
        padding-top: 35px;
        margin-left: 30px;
    }
    .sex{
        font-size :17px;
    }
    .sex label{
        margin-right: 5px;
    }
    .moshu{
        border:1px solid #dadada;
        padding: 20px;
        margin-bottom:50px;
    }
    .pay_way{
        font-size:18px;
    }
    .pay_way input{
        margin-left:20px;
    }
    .info_tag{
        font-size:20px;
        margin-bottom:20px;
    }
    .tx-area{
        height:80px;
    }
</style>