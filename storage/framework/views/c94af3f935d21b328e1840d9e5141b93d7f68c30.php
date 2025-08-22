<html lang=""  style="font-size: 39px;">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <link rel="icon" href="favicon.ico">

    <link href="<?php echo e(asset ('v1/dash/css/chunk-vendors.1c151b78.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset ('v1/dash/css/app.ccea3db7.css')); ?>" rel="stylesheet">
    <style>
        .w750 {
            width: 375PX;
            margin: 0 auto;
            font-size: 37.5px !important;
            transform: rotate(0);
            height: 100%;
        }
        .bannerWarp .notice[data-v-a5e573ac] {
    border-radius: 0 0 .85333rem 0;
    background: rgba(32, 33, 38, .7);
    height: 1.06667rem;
    position: absolute;
    bottom: 23;
    left: 0;
    right: 0;
}

        .w750 body {
            transform: rotate(0);
            margin-top: 20px;
            position: relative;
            height: calc(100% - 20px);
        }
        .navTab i.home[data-v-0031cc8c] {
    background-image: url(<?php echo e(asset ('v1/dash/img/house.png')); ?>);
}
.navTab i.tesk[data-v-0031cc8c] {
    background-image: url(<?php echo e(asset ('v1/dash/img/crown.png')); ?>);
}
.navTab i.team[data-v-0031cc8c] {
    background-image: url(<?php echo e(asset ('v1/dash/img/group.png')); ?>);
}
.navTab i.mine[data-v-0031cc8c] {
    background-image: url(<?php echo e(asset ('v1/dash/img/user7.png')); ?>);
}
.navTab .active i[data-v-0031cc8c], .navTab .van-tabbar-item--active i[data-v-0031cc8c] {
    background-color: #ffde5900;
}
.navTab .van-tabbar-item[data-v-0031cc8c] {
    color: #fff;
    font-size: .29333rem;
    position: relative;
    font-weight: 400;
}

        .w750 body #app {
            height: calc(100vh - 50px);
            overflow-y: auto;
        }
        .warp {
    min-height: 100vh;
    -webkit-overflow-scrolling: touch;
    background-color: #003e3e;
    padding-top: 1.22667rem;
    width: 100%;
    display: flex
;
    flex-direction: column;
    box-sizing: border-box;
    word-break: keep-all;
    color: #fff;
}
.quick dl dd[data-v-a5e573ac], .quick dl dt[data-v-a5e573ac] {
    width: calc(50% - .32rem);
    padding: .32rem .24rem;
    background-color: #311303;
    border-radius: .32rem;
    height: 1.70667rem;
    display: flex
;
    align-items: center;
    position: relative;
    margin: .16rem;
}

        .w750 body #app {
            min-height: 100%;
            overflow-y: auto;
        }
    </style>
    <style>
        .vue-cropper[data-v-01ee97ad] {
            position: relative;
            width: 100%;
            height: 100%;
            box-sizing: border-box;
            user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            direction: ltr;
            touch-action: none;
            text-align: left;
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQAQMAAAAlPW0iAAAAA3NCSVQICAjb4U/gAAAABlBMVEXMzMz////TjRV2AAAACXBIWXMAAArrAAAK6wGCiw1aAAAAHHRFWHRTb2Z0d2FyZQBBZG9iZSBGaXJld29ya3MgQ1M26LyyjAAAABFJREFUCJlj+M/AgBVhF/0PAH6/D/HkDxOGAAAAAElFTkSuQmCC);
        }

        .cropper-box[data-v-01ee97ad],
        .cropper-box-canvas[data-v-01ee97ad],
        .cropper-drag-box[data-v-01ee97ad],
        .cropper-crop-box[data-v-01ee97ad],
        .cropper-face[data-v-01ee97ad] {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            user-select: none;
        }

        .cropper-box-canvas img[data-v-01ee97ad] {
            position: relative;
            text-align: left;
            user-select: none;
            transform: none;
            max-width: none;
            max-height: none;
        }

        .cropper-box[data-v-01ee97ad] {
            overflow: hidden;
        }

        .cropper-move[data-v-01ee97ad] {
            cursor: move;
        }

        .cropper-crop[data-v-01ee97ad] {
            cursor: crosshair;
        }

        .cropper-modal[data-v-01ee97ad] {
            background: rgba(0, 0, 0, 0.5);
        }

        .cropper-crop-box[data-v-01ee97ad] {
            /*border: 2px solid #39f;*/
        }

        .cropper-view-box[data-v-01ee97ad] {
            display: block;
            overflow: hidden;
            width: 100%;
            height: 100%;
            outline: 1px solid #39f;
            outline-color: rgba(51, 153, 255, 0.75);
            user-select: none;
        }

        .cropper-view-box img[data-v-01ee97ad] {
            user-select: none;
            text-align: left;
            max-width: none;
            max-height: none;
        }

        .cropper-face[data-v-01ee97ad] {
            top: 0;
            left: 0;
            background-color: #fff;
            opacity: 0.1;
        }

        .crop-info[data-v-01ee97ad] {
            position: absolute;
            left: 0px;
            min-width: 65px;
            text-align: center;
            color: white;
            line-height: 20px;
            background-color: rgba(0, 0, 0, 0.8);
            font-size: 12px;
        }

        .crop-line[data-v-01ee97ad] {
            position: absolute;
            display: block;
            width: 100%;
            height: 100%;
            opacity: 0.1;
        }

        .line-w[data-v-01ee97ad] {
            top: -3px;
            left: 0;
            height: 5px;
            cursor: n-resize;
        }

        .line-a[data-v-01ee97ad] {
            top: 0;
            left: -3px;
            width: 5px;
            cursor: w-resize;
        }

        .line-s[data-v-01ee97ad] {
            bottom: -3px;
            left: 0;
            height: 5px;
            cursor: s-resize;
        }

        .line-d[data-v-01ee97ad] {
            top: 0;
            right: -3px;
            width: 5px;
            cursor: e-resize;
        }

        .crop-point[data-v-01ee97ad] {
            position: absolute;
            width: 8px;
            height: 8px;
            opacity: 0.75;
            background-color: #39f;
            border-radius: 100%;
        }

        .point1[data-v-01ee97ad] {
            top: -4px;
            left: -4px;
            cursor: nw-resize;
        }

        .point2[data-v-01ee97ad] {
            top: -5px;
            left: 50%;
            margin-left: -3px;
            cursor: n-resize;
        }

        .point3[data-v-01ee97ad] {
            top: -4px;
            right: -4px;
            cursor: ne-resize;
        }

        .point4[data-v-01ee97ad] {
            top: 50%;
            left: -4px;
            margin-top: -3px;
            cursor: w-resize;
        }

        .point5[data-v-01ee97ad] {
            top: 50%;
            right: -4px;
            margin-top: -3px;
            cursor: e-resize;
        }

        .point6[data-v-01ee97ad] {
            bottom: -5px;
            left: -4px;
            cursor: sw-resize;
        }

        .point7[data-v-01ee97ad] {
            bottom: -5px;
            left: 50%;
            margin-left: -3px;
            cursor: s-resize;
        }

        .point8[data-v-01ee97ad] {
            bottom: -5px;
            right: -4px;
            cursor: se-resize;
        }

        @media screen and (max-width: 500px) {
            .crop-point[data-v-01ee97ad] {
                position: absolute;
                width: 20px;
                height: 20px;
                opacity: 0.45;
                background-color: #39f;
                border-radius: 100%;
            }

            .point1[data-v-01ee97ad] {
                top: -10px;
                left: -10px;
            }

            .point2[data-v-01ee97ad],
            .point4[data-v-01ee97ad],
            .point5[data-v-01ee97ad],
            .point7[data-v-01ee97ad] {
                display: none;
            }

            .point3[data-v-01ee97ad] {
                top: -10px;
                right: -10px;
            }

            .point4[data-v-01ee97ad] {
                top: 0;
                left: 0;
            }

            .point6[data-v-01ee97ad] {
                bottom: -10px;
                left: -10px;
            }

            .point8[data-v-01ee97ad] {
                bottom: -10px;
                right: -10px;
            }
        }

        
    </style>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('v1/dash/css/331.95c82c77.css')); ?>">

    <title>Zambezi</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('v1/dash/css/517.30079196.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('v1/dash/css/754.a857914c.css')); ?>">
</head>

<body __processed_cf8ef8c9-2cce-420d-9043-f3c99d8441f6__="true"
    bis_register="W3sibWFzdGVyIjp0cnVlLCJleHRlbnNpb25JZCI6ImVwcGlvY2VtaG1ubGJoanBsY2drb2ZjaWllZ29tY29uIiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJkaXNhYmxlZCIsIkZBQ0VCT09LIjoiZGlzYWJsZWQiLCJUV0lUVEVSIjoiZGlzYWJsZWQiLCJSRURESVQiOiJkaXNhYmxlZCIsIlBJTlRFUkVTVCI6ImRpc2FibGVkIiwiSU5TVEFHUkFNIjoiZGlzYWJsZWQiLCJMSU5LRURJTiI6ImRpc2FibGVkIiwiQ09ORklHIjoiZGlzYWJsZWQifSwidmVyc2lvbiI6IjIuMC4yMiIsInNjb3JlIjoyMDAyMn1d"
    style="font-size: 12px;" class="">
    <noscript><strong>We're sorry but MissionSuperman doesn't work properly without JavaScript enabled. Please enable it to continue.</strong></noscript>
    <div class="statusBar"><span id="time">14:35</span>
        <div class="right"><i class="cellular"></i> <i class="battery"></i></div>
    </div>
    <div id="app">
        <div data-v-a5e573ac="" class="warp">
            <div data-v-a5e573ac="" class="bannerWarp">
                <div data-v-a5e573ac="" class="vanNavBar van-nav-bar van-nav-bar--fixed van-hairline--bottom">
                    <div class="van-nav-bar__content">
                        <div class="van-nav-bar__left">
                            <div data-v-a5e573ac="">
                                <div data-v-a5e573ac="" class="logo"><img data-v-a5e573ac="" src="<?php echo e(asset ('v1/dash/storage/files/20250123/d31927fcaaf28f702197e1850eed90e6.png')); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="van-nav-bar__title van-ellipsis"></div>
                        <div class="van-nav-bar__right">
                            <div data-v-a5e573ac="" class="iconWarp">
                                <ul data-v-a5e573ac="">
                                    <li data-v-a5e573ac=""><a data-v-a5e573ac="" href="https://t.me/TNL_LAB_WEBSITE_DEVELOPER"
                                            target="downloadFile"><img data-v-a5e573ac="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAYAAAAehFoBAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAOtSURBVHgB7VntkdowEF0y9//cQdTB0UGcCkIHOBUcHUAHcBWYDkgqgKvAlwrsVACpYCONd/FalmwJO8xl5t6MRkZ6Wj2tvgXAf4YZTARETHSkKCSUXOlwmc1mb/AeoEWmOmx1KHEYBXFTuCeMJ3VY63DuEVdifyNMXgb/GqYSS6j5zsl7/Hsh+CtL5OEuwsmrB0vohtJTkZ45ykrRcx0UNbwU6WaoJDAFqAJpfCONi7y8x8aROEfL7s7ytoIJxZp4buVL76oeO5LnslGOFu3w7MLByYe8K7hH7iFH3trydPzwQPcsX1ucs68xDns8ls9W+lbYZ3tHiIFocYn1RNkLowV5P3UJ6LGZCBtzKl+ItB2ls+hViF0eCoxMpG+wjZLiHxAIbIZFiW2vrgRnJdJVjNHc05i9Q3hOFaXEkWFBeTl2NxuTlsRosIlzYUz18BSOQ6/3sL2qtBr0yeI+U7zXB5YK/JBGvuvwosNJh4uDW1HeC3G5/AU80HWfqIyBfyxj02Up9AAjJ5xVdrAHiZcRr4SxIoSxuOUHWsvlYoCXuBonh0RK8SsMQ1H8B+JRUdy7OehhYYbMiX5eGycFP1Ecc9iOHhLQjN2Q3ewXxYoTpGBODBHM3N8QD+6VEMGVVR88iEw28A2tA4oD3Btf0HE2mLAscx854Xqno9mo4H3ipMf0V/Px4Mg0W+1lwEAKdePeIG7Mx5ZV0CwGbWBzEMlgANhszxuIRExZbM4V1+VTTrqK4pDJwD3wGeLxaNnog6KYV4uWYJ7xTzCMkMp8SCJssJaqk3PjTldAJMROlw7wWudnTpceNhPAtDrB4ceOmMXfhrJs+MC7WyVfjq6rhNkKtdCf+nMJ9ant1GOMDSg6Eyiouy+1RFUUjLhXEF0b8Hy1pPjkZWD4LXjsebiMsO/lMflIxIMjzwyX3Kr8TGXMEpRhc+vge5u5ceyEXSl67dHAS+zgbdz2cirSn7H7TGVwy53O622qJ8y7otBOiDLeklfxghoVe2uW3TzH7nPVmjjsiA2EAuuuLxze2FmcoBsK8Ts3COxeam97lxDGSmEsc3D2oRVg/218mjc27L6tKSv/llXFZaMcLdYj2sB+rjr6PCc4B5uD9ZDaTuJZj+i9ZTyjPOll14Nha9aj+wXf2L5l1xwUbs9s851j+wU+E/yl4BbYff0pMeAhcaxo46UV9v+HUQzkX1/w4Z7AehfbY9i/SIZjVoMURmDq/+nMMTCB9pm3gvrENeYM/YG74S8bdzwZ5Zn1+wAAAABJRU5ErkJggg==" alt="app"></a>
                                    </li>
                                    <li data-v-a5e573ac=""><a data-v-a5e573ac="" target="downloadFile"
                                            href="https://t.me/TNL_LAB_WEBSITE_DEVELOPER"><img data-v-a5e573ac="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAYAAAAehFoBAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAIRSURBVHgB7ZmLUcMwDIZVjgEyQpkA2CBMQDcgG9BOQNkAJuixARukG5QN0g0oEwjpIl9cN21sOU7pke9OF+KH9BMrtuMCjJwZRMzIXshKTMeGrIBYyMmUrMLhqDgmaMFGLF9zsgwSQH5nTqzwONSpiHIQHi+zRC8hFKzzipnBQMgoMiWEYpIqoH2FJ3LT00fWFfcK/hCTyWQHWkKfcF9c1BP2YRScmiSCZUr0mhn6DKp+6VL2HVMiNf9TsM/mCFNvoHxfHKz3zCgzQ+b2lf2B2UjdefjTvbABgu1t4cbewDhiuc3Uw19awdJ26ohG528vsaFxozri8c8pb7GauFEdW0QHidXGjepoiQ4WGxM3ej+MymnsbIK1dMUdl+bUqAVjc3S1dMqr/VkNV+isgG110ZzKJWyWY6ZsEcwLRk42lzZzy+da6t7sOp+4jPYJm8OVT7K8Zfra0Sf7WuqZW6uucuqCnrBW8BPZlmwh94VTzyPAZc9y/9NS9yj3W+iDY0NjpQMP/ZLs204LPMzh0owAHlK6o9OVEhrBc0twJYKZ3BJcnvC5AkVcgyYlzDA/UC7e0PVe7nMYgOuuBvTPZubMC+sp6INsS2VbLuMrlS+sLu9kx87IXsm+IAXYzLM5DATWB9vMBkKRF8rk6tAH2gWE4jjga5KDbYmT27FAC17ajzKW8AL3v9X6psQ6BZOn3kgXv4PJQ9bWcNTpAAAAAElFTkSuQmCC" alt="app"></a>
                                    </li>
                                    <li data-v-a5e573ac="" class=""><img data-v-a5e573ac="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAYAAAAehFoBAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAIpSURBVHgB7ZjRcYMwDIZFr+/NBmUENijdIBuUThI6QbIBdIKkE8AGaSeATJB0Alcq4lDBEAI2Se/47nQktmz/CGNkA8zMzEyK01WplFrgxUPz0R7BHge0E1rqOM4nXAoJRVuhHdX07NH8Nm2ORqyLlwTN5SK6c7rrHOyx4PE8URZitN86W5FYtIzvlKIbqmJaTAKPH4tor8412LJjxpG+ChyoEr/NaSmcPLgyqCFhLUmbQxndCG4Anh6NKN8Jn7LwQ9MwtDlFsO+ATJbhC5fjJeW/Xr3Bom06iPl0tDFVVLF8lri1ulj71GvhdzV1mah/AUNgX2vRb6ypv1xwi+ju5ea8UHqikegvbPEbJlgMsh8rWtNP2OE7XLAYbDtUNI/TS6wRwcJ/I/zX0APVnFZBjzZmBHObULSJLhBLq80S+o1hTrBGND3qhcbHq4ntvTQaF6wRncn2+NtXVYqaDei7IfgeRoJfJBKc40/q1EVL8D+loxRtn92o/pm/XqMYLZhAIRQJypvpBXShyqWJFO3VhFjCiGACBe04sj5U3/4dlqdgEGOCCY5iDBa5g3/GLNg2s2Db/Armt/vEZVffgArK06ZDo0ZVu9Sb3oRKh1vb5kdlDtLllAxNVEyi/m5Mgy5Ht5ZdBTAhqtjRyI3ppu6jOwyk6bCFKoHJoTgM/AJ7PEDxspOVOfU7LgZBr9aqeSg3JfSEW4WeO9B2oci+nsA+32Ahu5uZmRnJD+4fW8Xm4rn/AAAAAElFTkSuQmCC" alt="message">
                                        <!---->
                                    </li>
                                    <li data-v-a5e573ac=""><a data-v-a5e573ac=""
                                            href="https://t.me/TNL_LAB_WEBSITE_DEVELOPER"><img data-v-a5e573ac="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAYAAAAehFoBAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAJbSURBVHgB7ZnhUcMwDIVfOf7DCGECugFhAhihTABM0DIBbJCwQTcgGwAT1ExQmEDIWCJOSEOgdmru+O5U91LHflFs2VaBP8YEASGiQy4ytkPv8tNkMnlFKliRbHO2R9rMiq1gy7EruPNMRGwSuOr5bYYx4Q4v2daeiAe2K7Ypuh/snK1sCS9kCEUXO295K//BvVlLuL0/QyxaYu9+6yE7JLw3FEe0DANlgS0Rb690SCEk0vg6lFiv3annhCuEguposEJgrAOk7TWFmITiXSVHBLyhscC2kAtX4cdZdx/bv0GqV7AZIkFutVSmfXX38D3awBMiIXuNqtVfJ72Cvad95UajCRaepdzKwzprx9htaR8HfZUagmUl+9wj8KVoE62HGTUpOldCvnhLmwkefzv6X/T1r6L3pPI5F7rS3LAdiV1jfCqv/1M2A3coKOyP+1Ipl7LkybXQO/lBdnJSYA1GvhrWcAE3ND8mo45hnVwvSA8j5YfGIXE4Kf4FR6Cxg1PBRsozGuOc9TPOpDT2Q6NEyXYJNxPtZmfJ5RvbsV95JDJvm3mCOoLdN2pR85zVZobIfLNwlFpPPWxjnz3NVvzVLiLHXlv3/FuF8TCod272LS9H7n8YnoeXffVSihKD5ktKgnUfXCF1yKWylNTC6leoPjcWSB1qZpQypAy5zE/wjFIUWGDuiR18otlHQMhlhvLWZWMXJa+OnVRz1CccA3eyGBdqpmLbPIpHb+lrInw3UYE2/0XQhRUdLlv5S8FDRD6Qy6PtPtaKmD4ypAS5hF5J9T9IavZBcvzzR3gHi1ylrUNqsvcAAAAASUVORK5CYII=" alt="service"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
          <div data-v-a5e573ac="" class="banner">
                    <div data-v-a5e573ac="" class="">
                        <div class="van-swipe__track van-swipe__track--vertical"
                            style=" Y(-290px); height: 1160px;">
                    
                        <img data-v-a5e573ac=""  class="khab" src="<?php echo e(asset ('v1/dash/storage/files/20250120/photo_2025-05-28_10-30-12.jpg')); ?>">
                         <img data-v-a5e573ac=""  class="khab" src="<?php echo e(asset ('v1/dash/storage/files/20250120/photo_2025-05-28_12-36-35.jpg')); ?>">
                      <img data-v-a5e573ac=""  class="khab"  src="<?php echo e(asset ('v1/dash/storage/files/20250120/photo_2025-05-28_10-31-07.jpg')); ?>">
                      
                        
                         
                        </div>
                        <div class="van-swipe__indicators van-swipe__indicators--vertical">
                            <i class="van-swipe__indicator" style=""></i><i class="van-swipe__indicator van-swipe__indicator--active" style="background-color: white;"></i><i class="van-swipe__indicator" style=""></i><i class="van-swipe__indicator" style=""></i>
                        </div>
                    </div>

            <script>
                            var myIndex = 0;
                            carousel();

                            function carousel() {
                                var i;
                                var x = document.getElementsByClassName("khab");
                                for (i = 0; i < x.length; i++) {
                                    x[i].style.display = "none";
                                }
                                myIndex++;
                                if (myIndex > x.length) {
                                    myIndex = 1
                                }
                                x[myIndex - 1].style.display = "block";
                                setTimeout(carousel, 2000); // Change image every 2 seconds
                            }
                        </script>
            </div>
            <div data-v-a5e573ac="" class="quick">
                <dl data-v-a5e573ac="">
                    <dt data-v-a5e573ac="" class="bg1" onclick="window.location.href='<?php echo e(route ('user.deposit')); ?>'">
                        <i data-v-a5e573ac=""><img data-v-a5e573ac="" src="<?php echo e(asset ('v1/dash/img/20250527_001946.png')); ?>"></i> Deposit
                    </dt>
                    <dt data-v-a5e573ac="" class="bg2" onclick="window.location.href='<?php echo e(route ('user.withdraw')); ?>'">
                        <i data-v-a5e573ac=""><img data-v-a5e573ac="" src="<?php echo e(asset ('v1/dash/img/20250527_002023.png')); ?>"></i>
                        Withdraw </dt>
                    <dd data-v-a5e573ac="" class="" onclick="window.location.href='<?php echo e(route ('user.invite')); ?>'">
                        <i data-v-a5e573ac=""><img data-v-a5e573ac="" src="<?php echo e(asset ('v1/dash/img/20250527_002707.png')); ?>" alt="VIP"></i>
                        <p data-v-a5e573ac="">Invite Tier</p>
                    </dd>
                    <dd data-v-a5e573ac="" class="" onclick="window.location.href='<?php echo e(route ('user.bank.create')); ?>'">
                        <i data-v-a5e573ac=""><img data-v-a5e573ac="" src="<?php echo e(asset ('v1/dash/img/20250527_002730.png')); ?>" alt="wealth"></i>
                        <p data-v-a5e573ac=""> Bank Card </p>
                    </dd>
                    <dd data-v-a5e573ac="" class=""onclick="window.location.href='<?php echo e(route ('deposit.history')); ?>'" >
                        <i data-v-a5e573ac=""><img data-v-a5e573ac="" src="<?php echo e(asset ('v1/dash/img/20250527_002753.png')); ?>" alt="Invitation"></i>
                        <p data-v-a5e573ac=""> Records</p>
                    </dd>
                    <dd data-v-a5e573ac="" class=""onclick="window.location.href='<?php echo e(route ('commission')); ?>'" >
                        <i data-v-a5e573ac=""><img data-v-a5e573ac="" src="<?php echo e(asset ('v1/dash/img/20250527_002926.png')); ?>" alt="Platform"></i>
                        Company News </dd>
                   
               
                </ul>
            </div>
            <div data-v-a5e573ac="" class="cont">
                <div data-v-a5e573ac="" class="contTop">
                    <ul data-v-a5e573ac="">
                        <li data-v-a5e573ac=""> Membership Level </li>
                        <li data-v-a5e573ac="">
                            <i data-v-a5e573ac=""><img data-v-a5e573ac="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAGwSURBVHgB7ZbdUcJAFIXPDQniAxA6wA700RlwoAKwA60AqEDpACsQK1AqIEMefIQOpANAcGTIz3UDDsNfIJugT3wvSfbu5uSe3bsb4MQOuKvrCIkCSSamVhlPvgajzlkVISCZzt/viaxl210xzMtwqKmxq/PraV/mHVIZWrbz/CvmoS+e5QgsODbVB3EpbDQXZK0NZOnCSufDJyxl7cEM52KO097TRZ/ZzqvXDwHYmeHYTBRATsl1USZCFgFhoKcQDHCslcxPjb2Cn514WeRbArvllYURAR4KA4U4t1I3VnNb0NQG4nIEoW1SeWups5xDZtTxBzChtvq8NocjU20QqIJjiQFP6bxV9RUctKErqtYWjZeICBP107nZxWb7Wllkihi6duxW3A4RUcy1lOKu2FYdZoqigNm9RwTIRW3+nl0xv0FjU+tyOGsNsSqLfkHfnYYj2iotSCFrUpSBHkpQ1GUowUMfKn3iRyWMoMGgurdRIwSqb2RlLoS9fRC/xFW1uXLuPQ7aiayiOlUQlYg5iwD4loW3zXlhBfyWzNsGDiD+CAou050Y0EvnrAZO/Bc/p1SaD7r+CE4AAAAASUVORK5CYII="></i>
                            Job1-Job9 </li>
                    </ul>
                </div>
                <div data-v-a5e573ac="" class="contList">
                    <ul data-v-a5e573ac="">
                
     <?php $__currentLoopData = \App\Models\Package::where('status', 'active')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php
                        $myPackage = \App\Models\Purchase::where('user_id', user()->id)->where('package_id', $element->id)->where('status', 'active')->first();
                        ?>
                        <li data-v-a5e573ac="" class="lock">
                            <div data-v-a5e573ac="" class="contName"><?php echo e($element->name); ?></div>
                            <div data-v-a5e573ac="" class="cont-cont">
                                <p data-v-a5e573ac=""> Return Time: <span data-v-a5e573ac=""><?php echo e($element->validity); ?>Days</span></p>
                                <p data-v-a5e573ac=""> Daily Earn: <span data-v-a5e573ac=""><?php echo e(currency()); ?><?php echo e(($element->commission_with_avg_amount / $element->validity)); ?></span></p>
                                <p data-v-a5e573ac=""> Deposit Amount: <span data-v-a5e573ac=""><?php echo e(currency()); ?><?php echo e(($element->price)); ?></span></p>
                            </div>
                            <div data-v-a5e573ac="" class="rightWarp">
                                <div data-v-a5e573ac="" class="vipWarp"><img data-v-a5e573ac="" src="<?php echo e(asset($element->photo)); ?>">
                                    <!---->
                                </div><button data-v-a5e573ac="" onclick="window.location.href='<?php echo e(route('package.details', $element->id)); ?>'"  class="joinNow"> Join Now </button>
                            </div>
                        </li>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
                       
                    </ul>
                </div>
            </div>
      <?php echo $__env->make('partials.preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!---->
            <div class="van-overlay" style="z-index: 2009; display: none;"></div>
            <div data-v-a5e573ac="" class="popupWarp van-popup van-popup--center" style="z-index: 2010; display: none;">
                <div data-v-a5e573ac="" class="nContWarp">
                    <div data-v-a5e573ac="" class="nCont"></div>
                </div><i data-v-a5e573ac="" class="close"></i>
            </div>
            <!---->
        </div>
        <!---->
        <div data-v-0031cc8c="" class="navTab van-hairline--top-bottom van-tabbar van-tabbar--fixed" style="">
            <div data-v-0031cc8c="" class="van-tabbar-item active" onclick="window.location.href='<?php echo e(route ('dashboard')); ?>'">
                <div class="van-tabbar-item__icon"><i data-v-0031cc8c="" class="home"></i>
                    <!---->
                </div>
                <div class="van-tabbar-item__text"><span data-v-0031cc8c="">Home</span></div>
            </div>
            <div data-v-0031cc8c="" class="van-tabbar-item" onclick="window.location.href='<?php echo e(route ('ordered')); ?>'">
                <div class="van-tabbar-item__icon"><i data-v-0031cc8c="" class="tesk"></i>
                    <!---->
                </div>
                <div class="van-tabbar-item__text"><span data-v-0031cc8c="">Orders</span></div>

            </div>
            <div data-v-0031cc8c="" class="van-tabbar-item" onclick="window.location.href='<?php echo e(route ('user.team')); ?>'">
                <div class="van-tabbar-item__icon"><i data-v-0031cc8c="" class="team"></i>
                    <!---->
                </div>
                <div class="van-tabbar-item__text"><span data-v-0031cc8c="">Team</span></div>
            </div>
            <div data-v-0031cc8c="" class="van-tabbar-item" onclick="window.location.href='<?php echo e(route ('profile')); ?>'">
                <div class="van-tabbar-item__icon"><i data-v-0031cc8c="" class="mine"></i>
                    <!---->
                </div>
                <div class="van-tabbar-item__text"><span data-v-0031cc8c="">Mine</span></div>
            </div>
        </div>
    
    </div>

</body>

</html><?php /**PATH /home/tnllabm1/public_html/resources/views/app/main/index.blade.php ENDPATH**/ ?>