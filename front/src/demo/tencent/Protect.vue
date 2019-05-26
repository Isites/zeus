<template>
    <div class="center">
        <div class="w1000 stage">
            <div class="tab">
                <div id="div00">
                    <div class="five_mountain1">
                        <img src="../image/five/five_mountain.png" class="five_mountain">
                    </div>
                    <img src="../image/five/bg.png" class="five_bg1">
                    <img src="../image/five/bg2222.png" class="five_bg2">
                    <img src="../image/logo2.png" class="five_logo">
                    <img src="../image/five/five_smalllogo.png" class="five_smalllogo">
                    <img src="../image/five/five_cloud.png" class="five_cloud1">
                    <img src="../image/five/five_cloud.png" class="five_cloud2">
                    <div class="five_mask"></div>
                    <p class="five_2013" style="opacity: 0">2030</p>
                    <div class="five_text" style="opacity: 0">
                        <span class="text1"></span>
                        <span class="text2">腾讯管家动画-demo</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    methods: {
        showSprite () {
            $('.five_mountain').css({transition:'height 0.2s',height:100})
            $('.five_bg1').css({transition:'transform 0.3s 0.4s',"transform-origin": "bottom center",transform: "scale(1)"})
            $('.five_cloud1').css({transition:'transform 0.3s 0.5s',transform: "scale(1)"})
            $('.five_cloud2').css({transition:'transform 0.3s 0.5s',transform: "scale(1)"})
            $('.five_logo').css({transition:'transform 0.4s 0.7s',"transform-origin": "bottom center",transform: "scale(1)"})
            $('.five_bg2').css({transition:'all 0.6s 0.7s',opacity:0.1,animation:"40s infinite bg2"})
            $('.five_smalllogo').css({animation:'0.6s 1.8s smalllogo',"animation-fill-mode":"both"})

            $(".five_2013").css({top:56,opacity:1,transition:"all 0.5s 2.4s",})
            $(".five_text").css({top:127,opacity:1,transition:"all 0.5s 2.6s"})   
        }
    },
    mounted() {
      setTimeout(this.showSprite, 100)
    },
}
</script>
<style lang="css">
.five_mountain1{position: absolute;top:600px;left: 0px;width: 1000px;height:0px;z-index:3;opacity:1}
.five_mountain{position: absolute;bottom:0px;left: 0px;width:1000px;height:0px;z-index:3;opacity:1}
.five_logo{position: absolute;top:230px;left:325px;z-index:6;width: 330px;transform-origin: bottom center;transform: scale(0)}
.five_smalllogo{position: absolute;top:210px;left:583px;z-index:6;opacity: 0}
.five_bg1{position: absolute;width:900px;left:39px;top:189px;z-index:2;transform-origin: bottom center;transform: scale(0)}
/*.five_bg10{position: absolute;width:700px;left:133px;top:196px;z-index:4;opacity:1}*/
.five_bg2{position: absolute;width:740px;left:143px;top:217px;z-index:1;opacity: 0}
.five_mask{position: absolute;width:853px;height:300px;background-color: #09c;top:600px;left:96px;z-index:5}
.five_cloud1{position: absolute;width: 110px;height: 60px;left: 150px;;top:240px;transform: scale(0)}
.five_cloud2{position: absolute;width:90px;height: 55px;left:778px;top:422px;transform: scale(0)}

.five_2013{font-size: 54px;color: white;position: absolute;top:33px;left:425px;opacity: 1;}
.five_text{position:absolute;left:260px;top:97px;width:507px;height:80px;}
.five_text .text1{font-size: 18px;color: white;}
.five_text .text2{font-size: 24px;color: white;display:inline-block;width: 507px;text-align: center;margin-top:20px; }
@keyframes bg2{
    0%{transform:rotateZ(0deg)}
    100%{transform:rotateZ(180deg)}
}
@keyframes smalllogo{
    0%{transform:scale(1.2);opacity: 0}
    20%{transform: scale(2);opacity: 1}
    100%{transform: scale(0.8);opacity: 1}
}
</style>