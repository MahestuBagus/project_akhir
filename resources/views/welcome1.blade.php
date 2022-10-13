<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

    <title>Login</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <div>
        <link href="./form-login.css" rel="stylesheet" />
        <div>
            <div class="form-login-form-login">
                <div class="form-login-group1">
                    <img alt="Rectangle5611" src="/playground_assets/rectangle5611-ep2q.svg" class="form-login-rectangle5" />
                    <span class="form-login-text"><span>Login</span></span>
                    <div class="form-login-vuesaxlineardirectright">
                        <div class="form-login-vuesaxlineardirectright1">
                            <div class="form-login-directright">
                                <img alt="Vector115" src="/playground_assets/vector115-uxb.svg" class="form-login-vector" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-login-group2">
                    <img alt="WhatsAppImage20210205at18411110" src="/playground_assets/whatsappimage20210205at18411110-9fhi-700h.png" class="form-login-whats-app-image20210205at18411" />
                    <span class="form-login-text02"><span>BIMBINGAN KONSELING</span></span>
                </div>
                <div class="form-login-group4">
                    <img alt="Rectangle446" src="/playground_assets/rectangle446-kai-200h.png" class="form-login-rectangle4" />
                    <span class="form-login-text04"><span>Password</span></span>
                    <div class="form-login-vuesaxlineareye">
                        <div class="form-login-vuesaxlineareye1">
                            <div class="form-login-eye">
                                <img alt="Vector1110" src="/playground_assets/vector1110-7na.svg" class="form-login-vector1" />
                                <img alt="Vector1111" src="/playground_assets/vector1111-765.svg" class="form-login-vector2" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-login-group3">
                    <form>
                        username
                        <input id="input2" type="text" class="form-control-lg">
                    </form>
                </div>
                <span class="form-login-text08">
                    <span>
                        <span>Selamat Siang</span>
                        <br />
                        <span>Silakan Login Menggunakan Akun Anda</span>
                    </span>
                </span>
                <span class="form-login-text13"><span>Follow on us</span></span>
                <img alt="download183" src="/download.png" class="form-login-download1" />
                <img alt="download111213" src="/playground_assets/download111213-ubl-200h.png" class="form-login-download11" />
                <div class="form-login-frame1"></div>
                <img alt="Instagram2511" src="/playground_assets/instagram2511-z0bi.svg" class="form-login-instagram" />
                <img alt="Union2812" src="/playground_assets/union2812-nftf.svg" class="form-login-union" />
            </div>
        </div>
    </div>
</body>

</html>
<style>
    .form-login-form-login {
        width: 100%;
        height: 1024px;
        display: flex;
        overflow: hidden;
        position: relative;
        max-width: 1440px;
        box-sizing: border-box;
        align-items: flex-start;
        flex-shrink: 0;
        border-color: transparent;
        border-radius: 0px 0px 0px 0px;
        background-color: rgba(255, 255, 255, 1);
    }

    .form-login-group1 {
        top: 708.88916015625px;
        left: 864px;
        width: 366.3000793457031px;
        height: 31.991273880004883px;
        display: flex;
        padding: 0;
        position: absolute;
        align-self: auto;
        box-sizing: border-box;
        align-items: flex-start;
        flex-shrink: 1;
        border-color: transparent;
        border-style: none;
        border-width: 0;
        margin-right: 0;
        border-radius: 0px 0px 0px 0px;
        margin-bottom: 0;
        flex-direction: row;
        justify-content: flex-start;
        background-color: transparent;
    }

    .form-login-rectangle5 {
        top: 0px;
        left: 0px;
        width: 366px;
        height: 32px;
        position: absolute;
        box-sizing: content-box;
    }

    .form-login-text {
        top: 6.886782646179199px;
        left: 171.30897521972656px;
        color: rgba(255, 255, 255, 1);
        width: 56px;
        height: auto;
        position: absolute;
        font-size: 16px;
        align-self: auto;
        font-style: Semi Bold;
        text-align: center;
        font-family: Inter;
        font-weight: 700;
        line-height: normal;
        font-stretch: normal;
        text-decoration: none;
    }

    .form-login-vuesaxlineardirectright {
        top: 10.330202102661133px;
        left: 160.11795043945312px;
        width: 11.191038131713867px;
        height: 11.191038131713867px;
        display: flex;
        position: absolute;
        box-sizing: border-box;
        align-items: flex-start;
        flex-shrink: 0;
        border-color: transparent;
        border-radius: 0px 0px 0px 0px;
    }

    .form-login-vuesaxlineardirectright1 {
        top: 0px;
        left: 0px;
        width: 11.191038131713867px;
        height: 11.191038131713867px;
        display: flex;
        padding: 0;
        position: absolute;
        align-self: auto;
        box-sizing: border-box;
        align-items: flex-start;
        flex-shrink: 1;
        border-color: transparent;
        border-style: none;
        border-width: 0;
        margin-right: 0;
        border-radius: 0px 0px 0px 0px;
        margin-bottom: 0;
        flex-direction: row;
        justify-content: flex-start;
        background-color: transparent;
    }

    .form-login-directright {
        top: 0px;
        left: 0px;
        width: 11.191038131713867px;
        height: 11.191038131713867px;
        display: flex;
        padding: 0;
        position: absolute;
        align-self: auto;
        box-sizing: border-box;
        align-items: flex-start;
        flex-shrink: 1;
        border-color: transparent;
        border-style: none;
        border-width: 0;
        border-radius: 0px 0px 0px 0px;
        flex-direction: row;
        justify-content: flex-start;
        background-color: transparent;
    }

    .form-login-vector {
        top: 1.2525722980499268px;
        left: 1.3979012966156006px;
        width: 8px;
        height: 9px;
        position: absolute;
        box-sizing: border-box;
    }

    .form-login-group2 {
        top: 71px;
        left: 131px;
        width: 576.7688598632812px;
        height: 881.5094604492188px;
        display: flex;
        padding: 0;
        position: absolute;
        align-self: auto;
        box-sizing: border-box;
        align-items: flex-start;
        flex-shrink: 1;
        border-color: transparent;
        border-style: none;
        border-width: 0;
        margin-right: 0;
        border-radius: 0px 0px 0px 0px;
        margin-bottom: 0;
        flex-direction: row;
        justify-content: flex-start;
        background-color: rgba(48, 120, 245, 1);
    }

    .form-login-whats-app-image20210205at18411 {
        top: 111.9103775024414px;
        left: 1.1368683772161603e-13px;
        width: 393px;
        height: 683px;
        position: absolute;
        box-sizing: border-box;
        border-color: transparent;
    }

    .form-login-text02 {
        top: 48.41608810424805px;
        left: 56.93334197998047px;
        color: rgba(255, 255, 255, 1);
        width: 448px;
        height: auto;
        position: absolute;
        font-size: 24px;
        align-self: auto;
        font-style: Extra Bold;
        text-align: center;
        font-family: Inter;
        font-weight: 700;
        line-height: normal;
        font-stretch: normal;
        text-decoration: none;
    }

    .form-login-group4 {
        top: 567px;
        left: 860px;
        width: 371.0000305175781px;
        height: 54.34361267089844px;
        display: flex;
        padding: 0;
        position: absolute;
        align-self: auto;
        box-sizing: border-box;
        align-items: flex-start;
        flex-shrink: 1;
        border-color: transparent;
        border-style: none;
        border-width: 0;
        margin-right: 0;
        border-radius: 0px 0px 0px 0px;
        margin-bottom: 0;
        flex-direction: row;
        justify-content: flex-start;
        background-color: transparent;
    }

    .form-login-rectangle4 {
        top: 22.623125076293945px;
        left: 4.280228614807129px;
        width: 367px;
        height: 32px;
        position: absolute;
        box-sizing: content-box;
        border-color: rgba(0, 0, 0, 1);
        border-style: solid;
        border-width: 0.5px;
    }

    .form-login-text04 {
        color: rgba(78, 79, 81, 1);
        width: 79px;
        height: auto;
        position: absolute;
        font-size: 15px;
        align-self: auto;
        font-style: Regular;
        text-align: center;
        font-family: Inter;
        font-weight: 400;
        line-height: normal;
        font-stretch: normal;
        text-decoration: none;
    }

    .form-login-vuesaxlineareye {
        top: 28.257076263427734px;
        left: 344.313720703125px;
        width: 20.660377502441406px;
        height: 20.660377502441406px;
        display: flex;
        position: absolute;
        box-sizing: border-box;
        align-items: flex-start;
        flex-shrink: 0;
        border-color: transparent;
        border-radius: 0px 0px 0px 0px;
    }

    .form-login-vuesaxlineareye1 {
        top: 0px;
        left: 0px;
        width: 20.660377502441406px;
        height: 20.660377502441406px;
        display: flex;
        padding: 0;
        position: absolute;
        align-self: auto;
        box-sizing: border-box;
        align-items: flex-start;
        flex-shrink: 1;
        border-color: transparent;
        border-style: none;
        border-width: 0;
        margin-right: 0;
        border-radius: 0px 0px 0px 0px;
        margin-bottom: 0;
        flex-direction: row;
        justify-content: flex-start;
        background-color: transparent;
    }

    .form-login-eye {
        top: 0px;
        left: 0px;
        width: 20.660377502441406px;
        height: 20.660377502441406px;
        display: flex;
        padding: 0;
        position: absolute;
        align-self: auto;
        box-sizing: border-box;
        align-items: flex-start;
        flex-shrink: 1;
        border-color: transparent;
        border-style: none;
        border-width: 0;
        border-radius: 0px 0px 0px 0px;
        flex-direction: row;
        justify-content: flex-start;
        background-color: transparent;
    }

    .form-login-vector1 {
        top: 7.248349189758301px;
        left: 7.248349189758301px;
        width: 6px;
        height: 6px;
        position: absolute;
        box-sizing: border-box;
    }

    .form-login-vector2 {
        top: 3.2023584842681885px;
        left: 1.9067809581756592px;
        width: 17px;
        height: 14px;
        position: absolute;
        box-sizing: border-box;
    }

    .form-login-group3 {
        top: 491px;
        left: 864px;
        width: 367.00006103515625px;
        height: 53.10823059082031px;
        display: flex;
        padding: 0;
        position: absolute;
        align-self: auto;
        box-sizing: border-box;
        align-items: flex-start;
        flex-shrink: 1;
        border-color: transparent;
        border-style: none;
        border-width: 0;
        margin-right: 0;
        border-radius: 0px 0px 0px 0px;
        margin-bottom: 0;
        flex-direction: row;
        justify-content: flex-start;
    }

    .form-login-rectangle3 {
        top: 21.387741088867188px;
        left: 0.2802734375px;
        width: 367px;
        height: 32px;
        position: absolute;
        box-sizing: content-box;
        border-color: rgba(0, 0, 0, 1);
        border-style: solid;
        border-width: 0.5px;
    }

    .form-login-text06 {
        color: rgba(78, 79, 81, 1);
        width: 81px;
        height: auto;
        position: absolute;
        font-size: 15px;
        align-self: auto;
        font-style: Regular;
        text-align: center;
        font-family: Inter;
        font-weight: 400;
        line-height: normal;
        font-stretch: normal;
        text-decoration: none;
    }

    .form-login-text08 {
        top: 410px;
        left: 864px;
        color: rgba(78, 79, 81, 1);
        width: 367px;
        height: auto;
        position: absolute;
        font-size: 17px;
        align-self: auto;
        font-style: Semi Bold;
        text-align: left;
        font-family: Inter;
        font-weight: 700;
        line-height: normal;
        font-stretch: normal;
        margin-right: 0;
        margin-bottom: 0;
        text-decoration: none;
    }

    .form-login-text13 {
        top: 779px;
        left: 962px;
        color: rgba(78, 79, 81, 1);
        width: 83px;
        height: auto;
        position: absolute;
        font-size: 11px;
        align-self: auto;
        font-style: Semi Bold;
        text-align: left;
        font-family: Inter;
        font-weight: 700;
        line-height: normal;
        font-stretch: normal;
        margin-right: 0;
        margin-bottom: 0;
        text-decoration: none;
    }

    .form-login-download1 {
        top: 254px;
        left: 909px;
        width: 277px;
        height: 99px;
        position: absolute;
        box-sizing: border-box;
        border-color: transparent;
        margin-right: 0;
        margin-bottom: 0;
    }

    .form-login-download11 {
        top: 638px;
        left: 945px;
        width: 206px;
        height: 54px;
        position: absolute;
        box-sizing: border-box;
        border-color: transparent;
        margin-right: 0;
        margin-bottom: 0;
    }

    .form-login-frame1 {
        top: 276px;
        left: 63px;
        width: 100px;
        height: 100px;
        display: flex;
        overflow: hidden;
        position: absolute;
        box-sizing: border-box;
        align-items: flex-start;
        flex-shrink: 0;
        border-color: transparent;
        margin-right: 0;
        border-radius: 0px 0px 0px 0px;
        margin-bottom: 0;
    }

    .form-login-instagram {
        top: 775px;
        left: 1048px;
        width: 20px;
        height: 20px;
        opacity: 0.50;
        position: absolute;
        box-sizing: border-box;
        margin-right: 0;
        margin-bottom: 0;
    }

    .form-login-union {
        top: 776px;
        left: 1084px;
        width: 25px;
        height: 19px;
        opacity: 0.50;
        position: absolute;
        box-sizing: border-box;
        margin-right: 0;
        margin-bottom: 0;
    }
</style>