<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('asserts/css/bootstrap.min.css')}}">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
        .shadow {
            filter: drop-shadow(0px 5px 4px rgba(0, 0, 0, .4));
        }
        .svg-item {
            width: 100%;
            font-size: 16px;
            margin: 0 auto;
            animation: donutfade 1s;
        }
        @keyframes donutfade {
            0% {
                opacity: .2;
            }
            100% {
                opacity: 1;
            }
        }
        @media (min-width: 992px) {
            .svg-item {
                width: 80%;
            }
        }
        .donut-ring {
            stroke: #EBEBEB;
        }

        .donut-text {
            font-family: Arial, Helvetica, sans-serif;
            fill: #FF6200;
        }

        .donut-text-1 {
            fill: aqua;
        }

        .donut-text-2 {
            fill: #d9e021;
        }

        .donut-text-3 {
            fill: #ed1e79;
        }

        .donut-label {
            font-size: 0.28em;
            font-weight: 700;
            line-height: 1;
            fill: #000;
            transform: translateY(0.25em);
        }

        .donut-percent {
            font-size: 0.5em;
            line-height: 1;
            transform: translateY(0.5em);
            font-weight: bold;
        }

        .donut-data {
            font-size: 0.12em;
            line-height: 1;
            transform: translateY(0.5em);
            text-align: center;
            text-anchor: middle;
            color: #666;
            fill: #666;
            animation: donutfadelong 1s;
        }

        html {
            text-align: center;
        }

        .donut-segment {
            transform-origin: center;
            stroke: #FF6200;
        }
        .form-control:focus {
            box-shadow: none;
        }
        .form-control-underlined {
            border-width: 0;
            border-bottom-width: 1px;
            border-radius: 0;
            padding-left: 0;
        }

        .form-control::placeholder {
            font-size: 0.95rem;
            color: #aaa;
            font-style: italic;
        }

        .donut-segment-2 {
            stroke: aqua;
            animation: donut1 3s;
        }
        .donut-segment-3 {
            stroke: #d9e021;
            animation: donut2 3s;
        }
        .donut-segment-4 {
            stroke: #ed1e79;
            animation: donut3 3s;
        }
        .segment-1 {
            fill: #ccc;
        }
        .segment-2 {
            fill: aqua;
        }
        .segment-3 {
            fill: #d9e021;
        }
        .segment-4 {
            fill: #ed1e79;
        }
        .donut-percent {
            animation: donutfadelong 1s;
        }
        @keyframes donutfadelong {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        a {
            text-decoration: none;
        }
        .chart-area {
            margin: 5em 20em;
        }
        @keyframes donut1 {
            0% {
                stroke-dasharray: 0, 100;
            }

            100% {
                stroke-dasharray: 69, 31;
            }
        }

        @keyframes donut2 {
            0% {
                stroke-dasharray: 0, 100;
            }

            100% {
                stroke-dasharray: 30, 70;
            }
        }

        @keyframes donut3 {
            0% {
                stroke-dasharray: 0, 100;
            }

            100% {
                stroke-dasharray: 1, 99;
            }
        }

        .svg-item {
            max-width: 30%;
            display: inline-block;
        }

        .simple-bar-chart {
            --line-count: 10;
            --line-color: currentcolor;
            --line-opacity: 0.25;
            --item-gap: 2%;
            --item-default-color: #060606;

            height: 10rem;
            display: grid;
            grid-auto-flow: column;
            gap: var(--item-gap);
            align-items: end;
            padding-inline: var(--item-gap);
            --padding-block: 1.5rem;
            /*space for labels*/
            padding-block: var(--padding-block);
            position: relative;
            isolation: isolate;
        }

        .simple-bar-chart::after {
            content: "";
            position: absolute;
            inset: var(--padding-block) 0;
            z-index: -1;
            --line-width: 1px;
            --line-spacing: calc(100% / var(--line-count));
            background-image: repeating-linear-gradient(to top, transparent 0 calc(var(--line-spacing) - var(--line-width)), var(--line-color) 0 var(--line-spacing));
            box-shadow: 0 var(--line-width) 0 var(--line-color);
            opacity: var(--line-opacity);
        }

        .simple-bar-chart>.item {
            height: calc(1% * var(--val));
            background-color: var(--clr, var(--item-default-color));
            position: relative;
            animation: item-height 1s ease forwards
        }

        @keyframes item-height {
            from {
                height: 0
            }
        }

        .simple-bar-chart>.item>* {
            position: absolute;
            text-align: center
        }

        .simple-bar-chart>.item>.label {
            inset: 100% 0 auto 0
        }

        .simple-bar-chart>.item>.value {
            inset: auto 0 100% 0
        }
    </style>
    <title>Document</title>
</head>

<body style="background-color:ghostwhite;">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <div class='logo p-3' style="background-color: white;width:10rem;color:red;font-size:large;font-weight:bold;">
                    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcS1czUXPAUXGCDcO5VT2W1PTho0BXYeR4-NBkx6vMt21JA5ozh2" alt="" style="width:50px;height:50px;border-radius:50%;">
                    Finance
                </div>
                <div class="mt-4">
                    <div class="mt-2 d-flex align-items-center justify-content-between">
                        <div>
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <label for="" class="form-label">Dashboard</label>
                        </div>
                        <div class='ml-auto'>
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="mt-2 d-flex align-items-center justify-content-between">
                        <div>
                            <i class="fa fa-file" aria-hidden="true"></i>
                            <label for="" class='form-label ml-2'>Pages</label>
                        </div>
                        <div class="ml-auto">
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="mt-2 d-flex align-items-center justify-content-between">
                        <div>
                            <i class="fa fa-film" aria-hidden="true"></i>
                            <label for="" class='form-label'>Applications</label>
                        </div>

                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </div>
                    <div class="mt-2 d-flex align-items-center justify-content-between">
                        <div>
                            <i class="fa fa-compass" aria-hidden="true"></i>
                            <label for="" class='form-label'>UI Component</label>
                        </div>
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </div>
                    <div class="mt-2 d-flex align-items-center justify-content-between">
                        <div>
                            <i class="fa fa-windows" aria-hidden="true"></i>
                            <label for="" class='form-label'>Widgets</label>
                        </div>
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </div>
                    <div class="mt-2 d-flex align-items-center justify-content-between">
                        <div>
                            <i class="fa fa-fort-awesome" aria-hidden="true"></i>
                            <label for="" class='form-label'>Forms</label>
                        </div>
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </div>
                    <div class="mt-2 d-flex align-items-center justify-content-between">
                        <div>
                            <i class="fa fa-area-chart" aria-hidden="true"></i>
                            <label for="" class='form-label'>Charts</label>
                        </div>
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div style="background-color: white;">
                    <div class='m-3'>
                        <div class="row d-flex align-items-center justify-content-between">
                            <div class="col-lg-8 mt-3">
                                <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                                    <div class="input-group">
                                        <input type="search" placeholder="Search" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                                        <div class="input-group-append">
                                            <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='col-sm-4  d-flex align-items-center justify-content-between'>
                                <div>
                                    <i style='font-size:24px' class='far'>&#xf4ad;</i>
                                    <i style='font-size:24px' class='fas'>&#xf0f3;</i>
                                </div>
                                <img src="data:image/jpeg;base64,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" alt="avatar" style="width: 80px;height:80px;border-radius:50%;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container" style="background-color:white ;">
                    <div class="row">
                        <div class="col-6">
                            <div class="m-4 p-3" style="color:white;background-color:red;border-radius:10px">
                                <p>Total Income</p>
                                <h2>$ 579,000</h2>
                                <p>Save 85%</p>
                            </div>
                            <div class="m-4 p-3" style="color:white;background-color:black;border-radius:10px">
                                <p>Cash on Hand</p>
                                <h2>$ 92,000</h2>
                                <p>Save 55%</p>
                            </div>
                            <div class="mt-4 mr-4">
                                <h6>API and AR Balance</h6>
                                <p>Avg $5.093</p>
                                <div class="simple-bar-chart ">
                                    <div class="item" style="--clr: blue; --val: 80">
                                        <div class="label">Jan 31</div>
                                    </div>
                                    <div class="item" style="--clr: blue; --val: 70">
                                        <div class="label">Jan 21</div>
                                    </div>
                                    <div class="item" style="--clr: blue; --val: 50">
                                        <div class="label">Jan 10</div>
                                    </div>
                                    <div class="item" style="--clr: blue; --val: 100">
                                        <div class="label">Feb 14</div>
                                    </div>
                                    <div class="item" style="--clr: blue; --val: 15">
                                        <div class="label">March 21</div>
                                    </div>
                                    <div class="item" style="--clr: blue; --val: 1">
                                        <div class="label">March 29</div>
                                    </div>
                                    <div class="item" style="--clr: blue; --val: 20">
                                        <div class="label">March 30</div>
                                    </div>
                                    <div class="item" style="--clr: blue; --val: 90">
                                        <div class="label">March 25</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mt-4 mr-4 p-3" style="color:white;background-color:black;border-radius:10px">
                                <p>Cash on Hand</p>
                                <h2>$ 29,000</h2>
                                <p>Save 25%</p>
                            </div>
                            <div class="mt-4 mr-4 p-3" style="color:white;background-color:red;border-radius:10px">
                                <p>Net Profit Margin</p>
                                <h2>$ 109,000</h2>
                                <p>Save 79%</p>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-6 mt-4 mb-4 " style="background-color:ghostwhite;">
                                        <p>% of income Budget</p>
                                        <div class="svg-item">
                                            <svg width="100%" height="100%" viewBox="0 0 40 40" class="donut">
                                                <circle class="donut-hole" cx="20" cy="20" r="15.91549430918954" fill="white"></circle>
                                                <circle class="donut-ring" cx="20" cy="20" r="15.91549430918954" fill="transparent" stroke-width="3.5"></circle>
                                                <circle class="donut-segment donut-segment-2" cx="20" cy="20" r="15.91549430918954" fill="transparent" stroke-width="3.5" stroke-dasharray="69 31" stroke-dashoffset="25"></circle>
                                                <g class="donut-text donut-text-1">
                                                    <text y="50%" transform="translate(0, 2)">
                                                        <tspan x="50%" text-anchor="middle" class="donut-percent">111%</tspan>
                                                    </text>
                                                    <text y="60%" transform="translate(0, 2)">
                                                        <tspan x="50%" text-anchor="middle" class="donut-data">3450 widgets</tspan>
                                                    </text>
                                                </g>
                                            </svg>
                                        </div>
                                        <hr>
                                        <a href="#">View</a>
                                    </div>

                                    <div class="col-6 mt-4 mb-4" style="background-color:ghostwhite;">
                                        <p>% of income Budget</p>
                                        <div class="svg-item">
                                            <svg width="100%" height="100%" viewBox="0 0 40 40" class="donut">
                                                <circle class="donut-hole" cx="20" cy="20" r="15.91549430918954" fill="white"></circle>
                                                <circle class="donut-ring" cx="20" cy="20" r="15.91549430918954" fill="transparent" stroke-width="3.5"></circle>
                                                <circle class="donut-segment donut-segment-2" cx="20" cy="20" r="15.91549430918954" fill="transparent" stroke-width="3.5" stroke-dasharray="69 31" stroke-dashoffset="25"></circle>
                                                <g class="donut-text donut-text-1">
                                                    <text y="50%" transform="translate(0, 2)">
                                                        <tspan x="50%" text-anchor="middle" class="donut-percent">69%</tspan>
                                                    </text>
                                                    <text y="60%" transform="translate(0, 2)">
                                                        <tspan x="50%" text-anchor="middle" class="donut-data">3450 widgets</tspan>
                                                    </text>
                                                </g>
                                            </svg>
                                        </div>
                                        <hr>
                                        <a href="#">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <script src="{{asset('asserts/js/bootstrap.min.js')}}"></script>

</body>

</html>
