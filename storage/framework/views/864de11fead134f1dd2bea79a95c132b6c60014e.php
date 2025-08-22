<html lang=""  style="font-size: 39px;">
      <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <link href="<?php echo e(asset ('v1/login/css/chunk-vendors.1c151b78.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset ('v1/login/css/app.ccea3db7.css')); ?>" rel="stylesheet">
    <style>
        .w750 {
            width: 375PX;
            margin: 0 auto;
            font-size: 37.5px !important;
            transform: rotate(0);
            height: 100%;
        }

        .w750 body {
            transform: rotate(0);
            margin-top: 20px;
            position: relative;
            height: calc(100% - 20px);
        }

        .w750 body #app {
            height: calc(100vh - 50px);
            overflow-y: auto;
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
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('v1/login/css/331.95c82c77.css')); ?>">
 
    <title>Zambezi</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('v1/login/css/517.30079196.css')); ?>">
</head>
<form action="<?php echo e(route ('login')); ?>" method="post">
<?php echo csrf_field(); ?>
<body __processed_cf8ef8c9-2cce-420d-9043-f3c99d8441f6__="true"
    bis_register="W3sibWFzdGVyIjp0cnVlLCJleHRlbnNpb25JZCI6ImVwcGlvY2VtaG1ubGJoanBsY2drb2ZjaWllZ29tY29uIiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJkaXNhYmxlZCIsIkZBQ0VCT09LIjoiZGlzYWJsZWQiLCJUV0lUVEVSIjoiZGlzYWJsZWQiLCJSRURESVQiOiJkaXNhYmxlZCIsIlBJTlRFUkVTVCI6ImRpc2FibGVkIiwiSU5TVEFHUkFNIjoiZGlzYWJsZWQiLCJMSU5LRURJTiI6ImRpc2FibGVkIiwiQ09ORklHIjoiZGlzYWJsZWQifSwidmVyc2lvbiI6IjIuMC4yMiIsInNjb3JlIjoyMDAyMn1d"
    style="font-size: 12px;">
    <noscript><strong>We're sorry but MissionSuperman doesn't work properly without JavaScript enabled. Please enable it to continue.</strong></noscript>
    <div class="statusBar"><span id="time">13:32</span>
        <div class="right"><i class="cellular"></i> <i class="battery"></i></div>
    </div>
    <div id="app">
        <div data-v-299c0b80="" class="lrWarp warp">
            <div data-v-299c0b80="" class="logo"><img data-v-299c0b80="" src="<?php echo e(asset ('v1/login/storage/files/20250123/d31927fcaaf28f702197e1850eed90e6.png')); ?>" alt="logo">
            </div>
            <div data-v-299c0b80="" class="contWarp">
                <div data-v-299c0b80="" class="tab">
                    <ul data-v-299c0b80="">
                        <li data-v-299c0b80="" class="active"><span data-v-299c0b80="">Login</span></li>
                        <li data-v-299c0b80="" class=""><span data-v-299c0b80="">Register</span></li>
                    </ul>
                </div>
                <div data-v-299c0b80="" class="cont">
                    <ul data-v-299c0b80="">
                        <li data-v-299c0b80="">
                            <div data-v-299c0b80="" class="van-cell van-field">
                                <div class="van-field__left-icon"><i class="van-icon van-icon-username"><!----></i>
                                </div>
                                <div class="van-cell__title van-field__label"><span>+254</span></div>
                                <div class="van-cell__value van-field__value">
                                    <div class="van-field__body"><input type="text" name="phone" placeholder="Phone Number" class="van-field__control">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-v-299c0b80="">
                            <div data-v-299c0b80="" class="van-cell van-field">
                                <div class="van-field__left-icon"><i class="van-icon van-icon-password"><!----></i>
                                </div>
                                <div class="van-cell__value van-cell__value--alone van-field__value">
                                    <div class="van-field__body"><input type="password" name="password" placeholder="Password" class="van-field__control">
                                        <div class="van-field__right-icon"><i data-v-299c0b80="" class="eye noeye"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!---->
                        <li data-v-299c0b80="">
                            <div data-v-299c0b80="" role="checkbox" tabindex="0" aria-checked="true"
                                class="van-checkbox">
                                <div class="van-checkbox__icon van-checkbox__icon--square van-checkbox__icon--checked">
                                    <i class="van-icon van-icon-success" style="border-color: rgb(18, 101, 255); background-color: rgb(18, 101, 255);"><!----></i>
                                </div><span class="van-checkbox__label">Remember Useruame/Password</span>
                            </div>
                        </li>
                        <li data-v-299c0b80="">
                            <button data-v-299c0b80="" onclick="login()"  class="van-button van-button--info van-button--normal van-button--block van-button--round"><div data-v-299c0b80="" class="van-button__content"><span data-v-299c0b80="" class="van-button__text"> Login </span></div></button>
                        </li>
                        <li data-v-299c0b80="">
                            <button data-v-299c0b80="" type="button" onclick="window.location.href='<?php echo e(route ('register')); ?>'" class="van-button van-button--default van-button--normal van-button--plain van-button--block van-button--round"><div data-v-299c0b80="" class="van-button__content"><span data-v-299c0b80="" class="van-button__text"> No account? Register </span></div></button>
                        </li>
                        <li data-v-299c0b80="">
                            <p data-v-299c0b80=""> <a data-v-299c0b80=""
                                    href="https://t.me/TNL_LAB_WEBSITE_DEVELOPER"> &gt;&gt; Customer
                                    Service </a></p>
                        </li>
                        <li data-v-299c0b80="">
                            <p data-v-299c0b80=""> default language <span data-v-299c0b80="">English</span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <!---->
        </div>
        <!---->
        <div data-v-0031cc8c="" class="navTab van-hairline--top-bottom van-tabbar van-tabbar--fixed"
            style="display: none;">
            <div data-v-0031cc8c="" class="van-tabbar-item">
                <div class="van-tabbar-item__icon"><i data-v-0031cc8c="" class="home"></i>
                    <!---->
                </div>
                <div class="van-tabbar-item__text"><span data-v-0031cc8c="">Home</span></div>
            </div>
            <div data-v-0031cc8c="" class="van-tabbar-item">
                <div class="van-tabbar-item__icon"><i data-v-0031cc8c="" class="tesk"></i>
                    <!---->
                </div>
                <div class="van-tabbar-item__text"><span data-v-0031cc8c="">Task</span></div>
            </div>
            <div data-v-0031cc8c="" class="van-tabbar-item">
                <div class="van-tabbar-item__icon">
                    <!---->
                </div>
                <div class="van-tabbar-item__text">
                    <i data-v-0031cc8c="" class="wealth"></i><span data-v-0031cc8c="">Wealth</span></div>
            </div>
            <div data-v-0031cc8c="" class="van-tabbar-item">
                <div class="van-tabbar-item__icon"><i data-v-0031cc8c="" class="team"></i>
                    <!---->
                </div>
                <div class="van-tabbar-item__text"><span data-v-0031cc8c="">Team</span></div>
            </div>
            <div data-v-0031cc8c="" class="van-tabbar-item">
                <div class="van-tabbar-item__icon"><i data-v-0031cc8c="" class="mine"></i>
                    <!---->
                </div>
                <div class="van-tabbar-item__text"><span data-v-0031cc8c="">Mine</span></div>
            </div>
        </div>
  <?php echo $__env->make('partials.preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tnllabm1/public_html/resources/views/app/auth/login.blade.php ENDPATH**/ ?>