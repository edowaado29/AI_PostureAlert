<x-layoutadmin>

    <section class="grid xl:grid-cols-5 gap-4">
        <div class="xl:col-span-3">
            @include('partials.')
            <div
                class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="items-center justify-between pb-4 border-b border-gray-200 sm:flex dark:border-gray-700">
                    <div class="w-full mb-4 sm:mb-0">
                        <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Sales by category</h3>
                        <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">Desktop
                            PC</span>
                        <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
                            <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                    </path>
                                </svg>
                                2.5%
                            </span>
                            Since last month
                        </p>
                    </div>
                    <div class="w-full max-w-lg">
                        <div date-rangepicker="" class="grid items-center grid-cols-2 gap-4">
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path
                                            d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z">
                                        </path>
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z">
                                        </path>
                                    </svg>
                                </div>
                                <input name="start" type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 datepicker-input"
                                    placeholder="From">
                            </div>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path
                                            d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z">
                                        </path>
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z">
                                        </path>
                                    </svg>
                                </div>
                                <input name="end" type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 datepicker-input"
                                    placeholder="To">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full" id="sales-by-category" style="min-height: 435px;">
                    <div id="apexchartsjqe8fe5p" class="apexcharts-canvas apexchartsjqe8fe5p apexcharts-theme-light"
                        style="width: 669px; height: 420px;"><svg id="SvgjsSvg4184" width="669" height="420"
                            xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS"
                            transform="translate(0, 0)" style="background: transparent;">
                            <g id="SvgjsG4186" class="apexcharts-inner apexcharts-graphical"
                                transform="translate(12, 30)">
                                <defs id="SvgjsDefs4185">
                                    <linearGradient id="SvgjsLinearGradient4189" x1="0" y1="0"
                                        x2="0" y2="1">
                                        <stop id="SvgjsStop4190" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)"
                                            offset="0"></stop>
                                        <stop id="SvgjsStop4191" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)"
                                            offset="1"></stop>
                                        <stop id="SvgjsStop4192" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)"
                                            offset="1"></stop>
                                    </linearGradient>
                                    <clipPath id="gridRectMaskjqe8fe5p">
                                        <rect id="SvgjsRect4194" width="656" height="380" x="-4.5" y="-2.5"
                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                            stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMaskjqe8fe5p"></clipPath>
                                    <clipPath id="nonForecastMaskjqe8fe5p"></clipPath>
                                    <clipPath id="gridRectMarkerMaskjqe8fe5p">
                                        <rect id="SvgjsRect4195" width="651" height="379" x="-2" y="-2"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                </defs>
                                <rect id="SvgjsRect4193" width="92.42857142857143" height="375" x="0" y="0"
                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                    stroke-dasharray="3" fill="url(#SvgjsLinearGradient4189)"
                                    class="apexcharts-xcrosshairs" y2="375" filter="none" fill-opacity="0.9">
                                </rect>
                                <g id="SvgjsG4248" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG4249" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                    </g>
                                </g>
                                <g id="SvgjsG4258" class="apexcharts-grid">
                                    <g id="SvgjsG4259" class="apexcharts-gridlines-horizontal"
                                        style="display: none;">
                                        <line id="SvgjsLine4261" x1="0" y1="0" x2="647"
                                            y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine4262" x1="0" y1="75" x2="647"
                                            y2="75" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine4263" x1="0" y1="150" x2="647"
                                            y2="150" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine4264" x1="0" y1="225" x2="647"
                                            y2="225" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine4265" x1="0" y1="300" x2="647"
                                            y2="300" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine4266" x1="0" y1="375" x2="647"
                                            y2="375" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG4260" class="apexcharts-gridlines-vertical" style="display: none;">
                                    </g>
                                    <line id="SvgjsLine4268" x1="0" y1="375" x2="647"
                                        y2="375" stroke="transparent" stroke-dasharray="0"
                                        stroke-linecap="butt">
                                    </line>
                                    <line id="SvgjsLine4267" x1="0" y1="1" x2="0"
                                        y2="375" stroke="transparent" stroke-dasharray="0"
                                        stroke-linecap="butt">
                                    </line>
                                </g>
                                <g id="SvgjsG4196" class="apexcharts-bar-series apexcharts-plot-series">
                                    <g id="SvgjsG4197" class="apexcharts-series" rel="1"
                                        seriesName="DesktopxPC" data:realIndex="0">
                                        <path id="SvgjsPath4201"
                                            d="M 4.621428571428567 375L 4.621428571428567 195.85714285714286Q 4.621428571428567 192.85714285714286 7.621428571428567 192.85714285714286L 24.349999999999994 192.85714285714286Q 27.349999999999994 192.85714285714286 27.349999999999994 195.85714285714286L 27.349999999999994 195.85714285714286L 27.349999999999994 375L 27.349999999999994 375z"
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMaskjqe8fe5p)"
                                            pathTo="M 4.621428571428567 375L 4.621428571428567 195.85714285714286Q 4.621428571428567 192.85714285714286 7.621428571428567 192.85714285714286L 24.349999999999994 192.85714285714286Q 27.349999999999994 192.85714285714286 27.349999999999994 195.85714285714286L 27.349999999999994 195.85714285714286L 27.349999999999994 375L 27.349999999999994 375z"
                                            pathFrom="M 4.621428571428567 375L 4.621428571428567 375L 27.349999999999994 375L 27.349999999999994 375L 27.349999999999994 375L 27.349999999999994 375L 27.349999999999994 375L 4.621428571428567 375"
                                            cy="192.85714285714286" cx="94.55" j="0" val="170"
                                            barHeight="182.14285714285714" barWidth="27.72857142857143"></path>
                                        <path id="SvgjsPath4203"
                                            d="M 97.05 375L 97.05 185.14285714285714Q 97.05 182.14285714285714 100.05 182.14285714285714L 116.77857142857142 182.14285714285714Q 119.77857142857142 182.14285714285714 119.77857142857142 185.14285714285714L 119.77857142857142 185.14285714285714L 119.77857142857142 375L 119.77857142857142 375z"
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMaskjqe8fe5p)"
                                            pathTo="M 97.05 375L 97.05 185.14285714285714Q 97.05 182.14285714285714 100.05 182.14285714285714L 116.77857142857142 182.14285714285714Q 119.77857142857142 182.14285714285714 119.77857142857142 185.14285714285714L 119.77857142857142 185.14285714285714L 119.77857142857142 375L 119.77857142857142 375z"
                                            pathFrom="M 97.05 375L 97.05 375L 119.77857142857142 375L 119.77857142857142 375L 119.77857142857142 375L 119.77857142857142 375L 119.77857142857142 375L 97.05 375"
                                            cy="182.14285714285714" cx="186.97857142857143" j="1" val="180"
                                            barHeight="192.85714285714286" barWidth="27.72857142857143"></path>
                                        <path id="SvgjsPath4205"
                                            d="M 189.47857142857143 375L 189.47857142857143 202.28571428571428Q 189.47857142857143 199.28571428571428 192.47857142857143 199.28571428571428L 209.20714285714286 199.28571428571428Q 212.20714285714286 199.28571428571428 212.20714285714286 202.28571428571428L 212.20714285714286 202.28571428571428L 212.20714285714286 375L 212.20714285714286 375z"
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMaskjqe8fe5p)"
                                            pathTo="M 189.47857142857143 375L 189.47857142857143 202.28571428571428Q 189.47857142857143 199.28571428571428 192.47857142857143 199.28571428571428L 209.20714285714286 199.28571428571428Q 212.20714285714286 199.28571428571428 212.20714285714286 202.28571428571428L 212.20714285714286 202.28571428571428L 212.20714285714286 375L 212.20714285714286 375z"
                                            pathFrom="M 189.47857142857143 375L 189.47857142857143 375L 212.20714285714286 375L 212.20714285714286 375L 212.20714285714286 375L 212.20714285714286 375L 212.20714285714286 375L 189.47857142857143 375"
                                            cy="199.28571428571428" cx="279.40714285714284" j="2" val="164"
                                            barHeight="175.71428571428572" barWidth="27.72857142857143"></path>
                                        <path id="SvgjsPath4207"
                                            d="M 281.90714285714284 375L 281.90714285714284 222.64285714285714Q 281.90714285714284 219.64285714285714 284.90714285714284 219.64285714285714L 301.6357142857143 219.64285714285714Q 304.6357142857143 219.64285714285714 304.6357142857143 222.64285714285714L 304.6357142857143 222.64285714285714L 304.6357142857143 375L 304.6357142857143 375z"
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMaskjqe8fe5p)"
                                            pathTo="M 281.90714285714284 375L 281.90714285714284 222.64285714285714Q 281.90714285714284 219.64285714285714 284.90714285714284 219.64285714285714L 301.6357142857143 219.64285714285714Q 304.6357142857143 219.64285714285714 304.6357142857143 222.64285714285714L 304.6357142857143 222.64285714285714L 304.6357142857143 375L 304.6357142857143 375z"
                                            pathFrom="M 281.90714285714284 375L 281.90714285714284 375L 304.6357142857143 375L 304.6357142857143 375L 304.6357142857143 375L 304.6357142857143 375L 304.6357142857143 375L 281.90714285714284 375"
                                            cy="219.64285714285714" cx="371.8357142857143" j="3" val="145"
                                            barHeight="155.35714285714286" barWidth="27.72857142857143"></path>
                                        <path id="SvgjsPath4209"
                                            d="M 374.3357142857143 375L 374.3357142857143 170.14285714285714Q 374.3357142857143 167.14285714285714 377.3357142857143 167.14285714285714L 394.06428571428575 167.14285714285714Q 397.06428571428575 167.14285714285714 397.06428571428575 170.14285714285714L 397.06428571428575 170.14285714285714L 397.06428571428575 375L 397.06428571428575 375z"
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMaskjqe8fe5p)"
                                            pathTo="M 374.3357142857143 375L 374.3357142857143 170.14285714285714Q 374.3357142857143 167.14285714285714 377.3357142857143 167.14285714285714L 394.06428571428575 167.14285714285714Q 397.06428571428575 167.14285714285714 397.06428571428575 170.14285714285714L 397.06428571428575 170.14285714285714L 397.06428571428575 375L 397.06428571428575 375z"
                                            pathFrom="M 374.3357142857143 375L 374.3357142857143 375L 397.06428571428575 375L 397.06428571428575 375L 397.06428571428575 375L 397.06428571428575 375L 397.06428571428575 375L 374.3357142857143 375"
                                            cy="167.14285714285714" cx="464.26428571428573" j="4" val="194"
                                            barHeight="207.85714285714286" barWidth="27.72857142857143"></path>
                                        <path id="SvgjsPath4211"
                                            d="M 466.76428571428573 375L 466.76428571428573 195.85714285714286Q 466.76428571428573 192.85714285714286 469.76428571428573 192.85714285714286L 486.4928571428572 192.85714285714286Q 489.4928571428572 192.85714285714286 489.4928571428572 195.85714285714286L 489.4928571428572 195.85714285714286L 489.4928571428572 375L 489.4928571428572 375z"
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMaskjqe8fe5p)"
                                            pathTo="M 466.76428571428573 375L 466.76428571428573 195.85714285714286Q 466.76428571428573 192.85714285714286 469.76428571428573 192.85714285714286L 486.4928571428572 192.85714285714286Q 489.4928571428572 192.85714285714286 489.4928571428572 195.85714285714286L 489.4928571428572 195.85714285714286L 489.4928571428572 375L 489.4928571428572 375z"
                                            pathFrom="M 466.76428571428573 375L 466.76428571428573 375L 489.4928571428572 375L 489.4928571428572 375L 489.4928571428572 375L 489.4928571428572 375L 489.4928571428572 375L 466.76428571428573 375"
                                            cy="192.85714285714286" cx="556.6928571428572" j="5" val="170"
                                            barHeight="182.14285714285714" barWidth="27.72857142857143"></path>
                                        <path id="SvgjsPath4213"
                                            d="M 559.1928571428572 375L 559.1928571428572 211.92857142857144Q 559.1928571428572 208.92857142857144 562.1928571428572 208.92857142857144L 578.9214285714286 208.92857142857144Q 581.9214285714286 208.92857142857144 581.9214285714286 211.92857142857144L 581.9214285714286 211.92857142857144L 581.9214285714286 375L 581.9214285714286 375z"
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMaskjqe8fe5p)"
                                            pathTo="M 559.1928571428572 375L 559.1928571428572 211.92857142857144Q 559.1928571428572 208.92857142857144 562.1928571428572 208.92857142857144L 578.9214285714286 208.92857142857144Q 581.9214285714286 208.92857142857144 581.9214285714286 211.92857142857144L 581.9214285714286 211.92857142857144L 581.9214285714286 375L 581.9214285714286 375z"
                                            pathFrom="M 559.1928571428572 375L 559.1928571428572 375L 581.9214285714286 375L 581.9214285714286 375L 581.9214285714286 375L 581.9214285714286 375L 581.9214285714286 375L 559.1928571428572 375"
                                            cy="208.92857142857144" cx="649.1214285714286" j="6" val="155"
                                            barHeight="166.07142857142856" barWidth="27.72857142857143"></path>
                                        <g id="SvgjsG4199" class="apexcharts-bar-goals-markers"
                                            style="pointer-events: none">
                                            <g id="SvgjsG4200" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG4202" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG4204" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG4206" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG4208" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG4210" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG4212" className="apexcharts-bar-goals-groups"></g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG4214" class="apexcharts-series" rel="2" seriesName="Phones"
                                        data:realIndex="1">
                                        <path id="SvgjsPath4218"
                                            d="M 32.349999999999994 375L 32.349999999999994 249.42857142857144Q 32.349999999999994 246.42857142857144 35.349999999999994 246.42857142857144L 52.07857142857142 246.42857142857144Q 55.07857142857142 246.42857142857144 55.07857142857142 249.42857142857144L 55.07857142857142 249.42857142857144L 55.07857142857142 375L 55.07857142857142 375z"
                                            fill="rgba(253,186,140,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                            clip-path="url(#gridRectMaskjqe8fe5p)"
                                            pathTo="M 32.349999999999994 375L 32.349999999999994 249.42857142857144Q 32.349999999999994 246.42857142857144 35.349999999999994 246.42857142857144L 52.07857142857142 246.42857142857144Q 55.07857142857142 246.42857142857144 55.07857142857142 249.42857142857144L 55.07857142857142 249.42857142857144L 55.07857142857142 375L 55.07857142857142 375z"
                                            pathFrom="M 32.349999999999994 375L 32.349999999999994 375L 55.07857142857142 375L 55.07857142857142 375L 55.07857142857142 375L 55.07857142857142 375L 55.07857142857142 375L 32.349999999999994 375"
                                            cy="246.42857142857144" cx="122.27857142857142" j="0" val="120"
                                            barHeight="128.57142857142856" barWidth="27.72857142857143"></path>
                                        <path id="SvgjsPath4220"
                                            d="M 124.77857142857142 375L 124.77857142857142 63Q 124.77857142857142 60 127.77857142857142 60L 144.50714285714287 60Q 147.50714285714287 60 147.50714285714287 63L 147.50714285714287 63L 147.50714285714287 375L 147.50714285714287 375z"
                                            fill="rgba(253,186,140,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                            clip-path="url(#gridRectMaskjqe8fe5p)"
                                            pathTo="M 124.77857142857142 375L 124.77857142857142 63Q 124.77857142857142 60 127.77857142857142 60L 144.50714285714287 60Q 147.50714285714287 60 147.50714285714287 63L 147.50714285714287 63L 147.50714285714287 375L 147.50714285714287 375z"
                                            pathFrom="M 124.77857142857142 375L 124.77857142857142 375L 147.50714285714287 375L 147.50714285714287 375L 147.50714285714287 375L 147.50714285714287 375L 147.50714285714287 375L 124.77857142857142 375"
                                            cy="60" cx="214.70714285714286" j="1" val="294"
                                            barHeight="315" barWidth="27.72857142857143"></path>
                                        <path id="SvgjsPath4222"
                                            d="M 217.20714285714286 375L 217.20714285714286 199.07142857142858Q 217.20714285714286 196.07142857142858 220.20714285714286 196.07142857142858L 236.93571428571428 196.07142857142858Q 239.93571428571428 196.07142857142858 239.93571428571428 199.07142857142858L 239.93571428571428 199.07142857142858L 239.93571428571428 375L 239.93571428571428 375z"
                                            fill="rgba(253,186,140,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                            clip-path="url(#gridRectMaskjqe8fe5p)"
                                            pathTo="M 217.20714285714286 375L 217.20714285714286 199.07142857142858Q 217.20714285714286 196.07142857142858 220.20714285714286 196.07142857142858L 236.93571428571428 196.07142857142858Q 239.93571428571428 196.07142857142858 239.93571428571428 199.07142857142858L 239.93571428571428 199.07142857142858L 239.93571428571428 375L 239.93571428571428 375z"
                                            pathFrom="M 217.20714285714286 375L 217.20714285714286 375L 239.93571428571428 375L 239.93571428571428 375L 239.93571428571428 375L 239.93571428571428 375L 239.93571428571428 375L 217.20714285714286 375"
                                            cy="196.07142857142858" cx="307.1357142857143" j="2" val="167"
                                            barHeight="178.92857142857142" barWidth="27.72857142857143"></path>
                                        <path id="SvgjsPath4224"
                                            d="M 309.6357142857143 375L 309.6357142857143 186.21428571428572Q 309.6357142857143 183.21428571428572 312.6357142857143 183.21428571428572L 329.36428571428576 183.21428571428572Q 332.36428571428576 183.21428571428572 332.36428571428576 186.21428571428572L 332.36428571428576 186.21428571428572L 332.36428571428576 375L 332.36428571428576 375z"
                                            fill="rgba(253,186,140,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                            clip-path="url(#gridRectMaskjqe8fe5p)"
                                            pathTo="M 309.6357142857143 375L 309.6357142857143 186.21428571428572Q 309.6357142857143 183.21428571428572 312.6357142857143 183.21428571428572L 329.36428571428576 183.21428571428572Q 332.36428571428576 183.21428571428572 332.36428571428576 186.21428571428572L 332.36428571428576 186.21428571428572L 332.36428571428576 375L 332.36428571428576 375z"
                                            pathFrom="M 309.6357142857143 375L 309.6357142857143 375L 332.36428571428576 375L 332.36428571428576 375L 332.36428571428576 375L 332.36428571428576 375L 332.36428571428576 375L 309.6357142857143 375"
                                            cy="183.21428571428572" cx="399.56428571428575" j="3" val="179"
                                            barHeight="191.78571428571428" barWidth="27.72857142857143"></path>
                                        <path id="SvgjsPath4226"
                                            d="M 402.06428571428575 375L 402.06428571428575 115.5Q 402.06428571428575 112.5 405.06428571428575 112.5L 421.7928571428572 112.5Q 424.7928571428572 112.5 424.7928571428572 115.5L 424.7928571428572 115.5L 424.7928571428572 375L 424.7928571428572 375z"
                                            fill="rgba(253,186,140,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                            clip-path="url(#gridRectMaskjqe8fe5p)"
                                            pathTo="M 402.06428571428575 375L 402.06428571428575 115.5Q 402.06428571428575 112.5 405.06428571428575 112.5L 421.7928571428572 112.5Q 424.7928571428572 112.5 424.7928571428572 115.5L 424.7928571428572 115.5L 424.7928571428572 375L 424.7928571428572 375z"
                                            pathFrom="M 402.06428571428575 375L 402.06428571428575 375L 424.7928571428572 375L 424.7928571428572 375L 424.7928571428572 375L 424.7928571428572 375L 424.7928571428572 375L 402.06428571428575 375"
                                            cy="112.5" cx="491.9928571428572" j="4" val="245"
                                            barHeight="262.5" barWidth="27.72857142857143"></path>
                                        <path id="SvgjsPath4228"
                                            d="M 494.4928571428572 375L 494.4928571428572 183Q 494.4928571428572 180 497.4928571428572 180L 514.2214285714286 180Q 517.2214285714286 180 517.2214285714286 183L 517.2214285714286 183L 517.2214285714286 375L 517.2214285714286 375z"
                                            fill="rgba(253,186,140,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                            clip-path="url(#gridRectMaskjqe8fe5p)"
                                            pathTo="M 494.4928571428572 375L 494.4928571428572 183Q 494.4928571428572 180 497.4928571428572 180L 514.2214285714286 180Q 517.2214285714286 180 517.2214285714286 183L 517.2214285714286 183L 517.2214285714286 375L 517.2214285714286 375z"
                                            pathFrom="M 494.4928571428572 375L 494.4928571428572 375L 517.2214285714286 375L 517.2214285714286 375L 517.2214285714286 375L 517.2214285714286 375L 517.2214285714286 375L 494.4928571428572 375"
                                            cy="180" cx="584.4214285714286" j="5" val="182"
                                            barHeight="195" barWidth="27.72857142857143"></path>
                                        <path id="SvgjsPath4230"
                                            d="M 586.9214285714286 375L 586.9214285714286 224.78571428571428Q 586.9214285714286 221.78571428571428 589.9214285714286 221.78571428571428L 606.65 221.78571428571428Q 609.65 221.78571428571428 609.65 224.78571428571428L 609.65 224.78571428571428L 609.65 375L 609.65 375z"
                                            fill="rgba(253,186,140,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                            clip-path="url(#gridRectMaskjqe8fe5p)"
                                            pathTo="M 586.9214285714286 375L 586.9214285714286 224.78571428571428Q 586.9214285714286 221.78571428571428 589.9214285714286 221.78571428571428L 606.65 221.78571428571428Q 609.65 221.78571428571428 609.65 224.78571428571428L 609.65 224.78571428571428L 609.65 375L 609.65 375z"
                                            pathFrom="M 586.9214285714286 375L 586.9214285714286 375L 609.65 375L 609.65 375L 609.65 375L 609.65 375L 609.65 375L 586.9214285714286 375"
                                            cy="221.78571428571428" cx="676.85" j="6" val="143"
                                            barHeight="153.21428571428572" barWidth="27.72857142857143"></path>
                                        <g id="SvgjsG4216" class="apexcharts-bar-goals-markers"
                                            style="pointer-events: none">
                                            <g id="SvgjsG4217" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG4219" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG4221" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG4223" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG4225" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG4227" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG4229" className="apexcharts-bar-goals-groups"></g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG4231" class="apexcharts-series" rel="3"
                                        seriesName="GamingxConsole" data:realIndex="2">
                                        <path id="SvgjsPath4235"
                                            d="M 60.07857142857143 375L 60.07857142857143 142.28571428571428Q 60.07857142857143 139.28571428571428 63.07857142857143 139.28571428571428L 79.80714285714286 139.28571428571428Q 82.80714285714286 139.28571428571428 82.80714285714286 142.28571428571428L 82.80714285714286 142.28571428571428L 82.80714285714286 375L 82.80714285714286 375z"
                                            fill="rgba(23,176,189,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="2"
                                            clip-path="url(#gridRectMaskjqe8fe5p)"
                                            pathTo="M 60.07857142857143 375L 60.07857142857143 142.28571428571428Q 60.07857142857143 139.28571428571428 63.07857142857143 139.28571428571428L 79.80714285714286 139.28571428571428Q 82.80714285714286 139.28571428571428 82.80714285714286 142.28571428571428L 82.80714285714286 142.28571428571428L 82.80714285714286 375L 82.80714285714286 375z"
                                            pathFrom="M 60.07857142857143 375L 60.07857142857143 375L 82.80714285714286 375L 82.80714285714286 375L 82.80714285714286 375L 82.80714285714286 375L 82.80714285714286 375L 60.07857142857143 375"
                                            cy="139.28571428571428" cx="150.00714285714287" j="0" val="220"
                                            barHeight="235.71428571428572" barWidth="27.72857142857143"></path>
                                        <path id="SvgjsPath4237"
                                            d="M 152.50714285714287 375L 152.50714285714287 170.14285714285714Q 152.50714285714287 167.14285714285714 155.50714285714287 167.14285714285714L 172.2357142857143 167.14285714285714Q 175.2357142857143 167.14285714285714 175.2357142857143 170.14285714285714L 175.2357142857143 170.14285714285714L 175.2357142857143 375L 175.2357142857143 375z"
                                            fill="rgba(23,176,189,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="2"
                                            clip-path="url(#gridRectMaskjqe8fe5p)"
                                            pathTo="M 152.50714285714287 375L 152.50714285714287 170.14285714285714Q 152.50714285714287 167.14285714285714 155.50714285714287 167.14285714285714L 172.2357142857143 167.14285714285714Q 175.2357142857143 167.14285714285714 175.2357142857143 170.14285714285714L 175.2357142857143 170.14285714285714L 175.2357142857143 375L 175.2357142857143 375z"
                                            pathFrom="M 152.50714285714287 375L 152.50714285714287 375L 175.2357142857143 375L 175.2357142857143 375L 175.2357142857143 375L 175.2357142857143 375L 175.2357142857143 375L 152.50714285714287 375"
                                            cy="167.14285714285714" cx="242.43571428571428" j="1" val="194"
                                            barHeight="207.85714285714286" barWidth="27.72857142857143"></path>
                                        <path id="SvgjsPath4239"
                                            d="M 244.93571428571428 375L 244.93571428571428 145.5Q 244.93571428571428 142.5 247.93571428571428 142.5L 264.6642857142857 142.5Q 267.6642857142857 142.5 267.6642857142857 145.5L 267.6642857142857 145.5L 267.6642857142857 375L 267.6642857142857 375z"
                                            fill="rgba(23,176,189,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="2"
                                            clip-path="url(#gridRectMaskjqe8fe5p)"
                                            pathTo="M 244.93571428571428 375L 244.93571428571428 145.5Q 244.93571428571428 142.5 247.93571428571428 142.5L 264.6642857142857 142.5Q 267.6642857142857 142.5 267.6642857142857 145.5L 267.6642857142857 145.5L 267.6642857142857 375L 267.6642857142857 375z"
                                            pathFrom="M 244.93571428571428 375L 244.93571428571428 375L 267.6642857142857 375L 267.6642857142857 375L 267.6642857142857 375L 267.6642857142857 375L 267.6642857142857 375L 244.93571428571428 375"
                                            cy="142.5" cx="334.8642857142857" j="2" val="217"
                                            barHeight="232.5" barWidth="27.72857142857143"></path>
                                        <path id="SvgjsPath4241"
                                            d="M 337.3642857142857 375L 337.3642857142857 79.07142857142856Q 337.3642857142857 76.07142857142856 340.3642857142857 76.07142857142856L 357.09285714285716 76.07142857142856Q 360.09285714285716 76.07142857142856 360.09285714285716 79.07142857142856L 360.09285714285716 79.07142857142856L 360.09285714285716 375L 360.09285714285716 375z"
                                            fill="rgba(23,176,189,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="2"
                                            clip-path="url(#gridRectMaskjqe8fe5p)"
                                            pathTo="M 337.3642857142857 375L 337.3642857142857 79.07142857142856Q 337.3642857142857 76.07142857142856 340.3642857142857 76.07142857142856L 357.09285714285716 76.07142857142856Q 360.09285714285716 76.07142857142856 360.09285714285716 79.07142857142856L 360.09285714285716 79.07142857142856L 360.09285714285716 375L 360.09285714285716 375z"
                                            pathFrom="M 337.3642857142857 375L 337.3642857142857 375L 360.09285714285716 375L 360.09285714285716 375L 360.09285714285716 375L 360.09285714285716 375L 360.09285714285716 375L 337.3642857142857 375"
                                            cy="76.07142857142856" cx="427.29285714285714" j="3" val="279"
                                            barHeight="298.92857142857144" barWidth="27.72857142857143"></path>
                                        <path id="SvgjsPath4243"
                                            d="M 429.79285714285714 375L 429.79285714285714 147.64285714285714Q 429.79285714285714 144.64285714285714 432.79285714285714 144.64285714285714L 449.5214285714286 144.64285714285714Q 452.5214285714286 144.64285714285714 452.5214285714286 147.64285714285714L 452.5214285714286 147.64285714285714L 452.5214285714286 375L 452.5214285714286 375z"
                                            fill="rgba(23,176,189,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="2"
                                            clip-path="url(#gridRectMaskjqe8fe5p)"
                                            pathTo="M 429.79285714285714 375L 429.79285714285714 147.64285714285714Q 429.79285714285714 144.64285714285714 432.79285714285714 144.64285714285714L 449.5214285714286 144.64285714285714Q 452.5214285714286 144.64285714285714 452.5214285714286 147.64285714285714L 452.5214285714286 147.64285714285714L 452.5214285714286 375L 452.5214285714286 375z"
                                            pathFrom="M 429.79285714285714 375L 429.79285714285714 375L 452.5214285714286 375L 452.5214285714286 375L 452.5214285714286 375L 452.5214285714286 375L 452.5214285714286 375L 429.79285714285714 375"
                                            cy="144.64285714285714" cx="519.7214285714286" j="4" val="215"
                                            barHeight="230.35714285714286" barWidth="27.72857142857143"></path>
                                        <path id="SvgjsPath4245"
                                            d="M 522.2214285714286 375L 522.2214285714286 96.21428571428572Q 522.2214285714286 93.21428571428572 525.2214285714286 93.21428571428572L 541.95 93.21428571428572Q 544.95 93.21428571428572 544.95 96.21428571428572L 544.95 96.21428571428572L 544.95 375L 544.95 375z"
                                            fill="rgba(23,176,189,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="2"
                                            clip-path="url(#gridRectMaskjqe8fe5p)"
                                            pathTo="M 522.2214285714286 375L 522.2214285714286 96.21428571428572Q 522.2214285714286 93.21428571428572 525.2214285714286 93.21428571428572L 541.95 93.21428571428572Q 544.95 93.21428571428572 544.95 96.21428571428572L 544.95 96.21428571428572L 544.95 375L 544.95 375z"
                                            pathFrom="M 522.2214285714286 375L 522.2214285714286 375L 544.95 375L 544.95 375L 544.95 375L 544.95 375L 544.95 375L 522.2214285714286 375"
                                            cy="93.21428571428572" cx="612.1500000000001" j="5" val="263"
                                            barHeight="281.7857142857143" barWidth="27.72857142857143"></path>
                                        <path id="SvgjsPath4247"
                                            d="M 614.6500000000001 375L 614.6500000000001 181.92857142857144Q 614.6500000000001 178.92857142857144 617.6500000000001 178.92857142857144L 634.3785714285715 178.92857142857144Q 637.3785714285715 178.92857142857144 637.3785714285715 181.92857142857144L 637.3785714285715 181.92857142857144L 637.3785714285715 375L 637.3785714285715 375z"
                                            fill="rgba(23,176,189,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="2"
                                            clip-path="url(#gridRectMaskjqe8fe5p)"
                                            pathTo="M 614.6500000000001 375L 614.6500000000001 181.92857142857144Q 614.6500000000001 178.92857142857144 617.6500000000001 178.92857142857144L 634.3785714285715 178.92857142857144Q 637.3785714285715 178.92857142857144 637.3785714285715 181.92857142857144L 637.3785714285715 181.92857142857144L 637.3785714285715 375L 637.3785714285715 375z"
                                            pathFrom="M 614.6500000000001 375L 614.6500000000001 375L 637.3785714285715 375L 637.3785714285715 375L 637.3785714285715 375L 637.3785714285715 375L 637.3785714285715 375L 614.6500000000001 375"
                                            cy="178.92857142857144" cx="704.5785714285715" j="6" val="183"
                                            barHeight="196.07142857142856" barWidth="27.72857142857143"></path>
                                        <g id="SvgjsG4233" class="apexcharts-bar-goals-markers"
                                            style="pointer-events: none">
                                            <g id="SvgjsG4234" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG4236" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG4238" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG4240" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG4242" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG4244" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG4246" className="apexcharts-bar-goals-groups"></g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG4198" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    <g id="SvgjsG4215" class="apexcharts-datalabels" data:realIndex="1"></g>
                                    <g id="SvgjsG4232" class="apexcharts-datalabels" data:realIndex="2"></g>
                                </g>
                                <line id="SvgjsLine4269" x1="0" y1="0" x2="647"
                                    y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                    stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine4270" x1="0" y1="0" x2="647"
                                    y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                    class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG4271" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG4272" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG4273" class="apexcharts-point-annotations"></g>
                            </g>
                            <g id="SvgjsG4257" class="apexcharts-yaxis" rel="0"
                                transform="translate(-18, 0)">
                            </g>
                            <g id="SvgjsG4187" class="apexcharts-annotations"></g>
                        </svg>
                        <div class="apexcharts-legend" style="max-height: 210px;"></div>
                        <div class="apexcharts-tooltip apexcharts-theme-light">
                            <div class="apexcharts-tooltip-title"
                                style="font-family: Inter, sans-serif; font-size: 14px;"></div>
                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                    class="apexcharts-tooltip-marker"
                                    style="background-color: rgb(26, 86, 219);"></span>
                                <div class="apexcharts-tooltip-text"
                                    style="font-family: Inter, sans-serif; font-size: 14px;">
                                    <div class="apexcharts-tooltip-y-group"><span
                                            class="apexcharts-tooltip-text-y-label"></span><span
                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span
                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span
                                            class="apexcharts-tooltip-text-z-label"></span><span
                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                            <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                    class="apexcharts-tooltip-marker"
                                    style="background-color: rgb(253, 186, 140);"></span>
                                <div class="apexcharts-tooltip-text"
                                    style="font-family: Inter, sans-serif; font-size: 14px;">
                                    <div class="apexcharts-tooltip-y-group"><span
                                            class="apexcharts-tooltip-text-y-label"></span><span
                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span
                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span
                                            class="apexcharts-tooltip-text-z-label"></span><span
                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                            <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                    class="apexcharts-tooltip-marker"
                                    style="background-color: rgb(23, 176, 189);"></span>
                                <div class="apexcharts-tooltip-text"
                                    style="font-family: Inter, sans-serif; font-size: 14px;">
                                    <div class="apexcharts-tooltip-y-group"><span
                                            class="apexcharts-tooltip-text-y-label"></span><span
                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span
                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span
                                            class="apexcharts-tooltip-text-z-label"></span><span
                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                            <div class="apexcharts-yaxistooltip-text"></div>
                        </div>
                    </div>
                </div>
                <!-- Card Footer -->
                <div
                    class="flex items-center justify-between pt-3 mt-4 border-t border-gray-200 sm:pt-6 dark:border-gray-700">
                    <div>
                        <button
                            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 rounded-lg hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
                            type="button" data-dropdown-toggle="sales-by-category-dropdown">Last 7 days <svg
                                class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7">
                                </path>
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="sales-by-category-dropdown" data-popper-placement="bottom"
                            data-popper-reference-hidden="" data-popper-escaped=""
                            style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(1010px, 1607px);">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white" role="none">
                                    Sep 16, 2021 - Sep 22, 2021
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Yesterday</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Today</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Last 7 days</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Last 30 days</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Last 90 days</a>
                                </li>
                            </ul>
                            <div class="py-1" role="none">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Custom...</a>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <a href="#"
                            class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                            Sales Report
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div
                class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="flex items-center justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
                    <div>
                        <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Traffic by device</h3>
                        <span
                            class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">Desktop</span>
                    </div>
                    <a href="#"
                        class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                        Full report
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </div>
                <div id="traffic-by-device" style="min-height: 378.7px;">
                    <div id="apexchartsyozbvlxt" class="apexcharts-canvas apexchartsyozbvlxt apexcharts-theme-light"
                        style="width: 669px; height: 378.7px;"><svg id="SvgjsSvg4338" width="669" height="378.7"
                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                            style="background: transparent;">
                            <g id="SvgjsG4340" class="apexcharts-inner apexcharts-graphical"
                                transform="translate(147.5, 0)">
                                <defs id="SvgjsDefs4339">
                                    <clipPath id="gridRectMaskyozbvlxt">
                                        <rect id="SvgjsRect4342" width="382" height="400" x="-3" y="-1"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMaskyozbvlxt"></clipPath>
                                    <clipPath id="nonForecastMaskyozbvlxt"></clipPath>
                                    <clipPath id="gridRectMarkerMaskyozbvlxt">
                                        <rect id="SvgjsRect4343" width="380" height="402" x="-2" y="-2"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                </defs>
                                <g id="SvgjsG4344" class="apexcharts-pie">
                                    <g id="SvgjsG4345" transform="translate(0, 0) scale(1)">
                                        <circle id="SvgjsCircle4346" r="115.31951219512197" cx="188"
                                            cy="188" fill="transparent"></circle>
                                        <g id="SvgjsG4347" class="apexcharts-slices">
                                            <g id="SvgjsG4348" class="apexcharts-series apexcharts-pie-series"
                                                seriesName="Desktop" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath4349"
                                                    d="M 188 10.585365853658516 A 177.41463414634148 177.41463414634148 0 1 1 19.268656109001284 242.82413700203338 L 78.32462647085082 223.6356890513217 A 115.31951219512197 115.31951219512197 0 1 0 188 72.68048780487803 L 188 10.585365853658516 z"
                                                    fill="rgba(22,189,202,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                                    class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                    index="0" j="0" data:angle="252" data:startAngle="0"
                                                    data:strokeWidth="2" data:value="70"
                                                    data:pathOrig="M 188 10.585365853658516 A 177.41463414634148 177.41463414634148 0 1 1 19.268656109001284 242.82413700203338 L 78.32462647085082 223.6356890513217 A 115.31951219512197 115.31951219512197 0 1 0 188 72.68048780487803 L 188 10.585365853658516 z"
                                                    stroke="#1f2937"></path>
                                            </g>
                                            <g id="SvgjsG4350" class="apexcharts-series apexcharts-pie-series"
                                                seriesName="Tablet" rel="2" data:realIndex="1">
                                                <path id="SvgjsPath4351"
                                                    d="M 19.268656109001284 242.82413700203338 A 177.41463414634148 177.41463414634148 0 0 1 10.585365853658516 188.00000000000003 L 72.68048780487803 188 A 115.31951219512197 115.31951219512197 0 0 0 78.32462647085082 223.6356890513217 L 19.268656109001284 242.82413700203338 z"
                                                    fill="rgba(253,186,140,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                                    class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                    index="0" j="1" data:angle="18" data:startAngle="252"
                                                    data:strokeWidth="2" data:value="5"
                                                    data:pathOrig="M 19.268656109001284 242.82413700203338 A 177.41463414634148 177.41463414634148 0 0 1 10.585365853658516 188.00000000000003 L 72.68048780487803 188 A 115.31951219512197 115.31951219512197 0 0 0 78.32462647085082 223.6356890513217 L 19.268656109001284 242.82413700203338 z"
                                                    stroke="#1f2937"></path>
                                            </g>
                                            <g id="SvgjsG4352" class="apexcharts-series apexcharts-pie-series"
                                                seriesName="Phone" rel="3" data:realIndex="2">
                                                <path id="SvgjsPath4353"
                                                    d="M 10.585365853658516 188.00000000000003 A 177.41463414634148 177.41463414634148 0 0 1 187.96903530508644 10.585368555837903 L 187.97987294830617 72.68048956129464 A 115.31951219512197 115.31951219512197 0 0 0 72.68048780487803 188 L 10.585365853658516 188.00000000000003 z"
                                                    fill="rgba(26,86,219,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                                    class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                    index="0" j="2" data:angle="90" data:startAngle="270"
                                                    data:strokeWidth="2" data:value="25"
                                                    data:pathOrig="M 10.585365853658516 188.00000000000003 A 177.41463414634148 177.41463414634148 0 0 1 187.96903530508644 10.585368555837903 L 187.97987294830617 72.68048956129464 A 115.31951219512197 115.31951219512197 0 0 0 72.68048780487803 188 L 10.585365853658516 188.00000000000003 z"
                                                    stroke="#1f2937"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                                <line id="SvgjsLine4354" x1="0" y1="0" x2="376"
                                    y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                    stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine4355" x1="0" y1="0" x2="376"
                                    y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                    class="apexcharts-ycrosshairs-hidden"></line>
                            </g>
                            <g id="SvgjsG4341" class="apexcharts-annotations"></g>
                        </svg>
                        <div class="apexcharts-legend"></div>
                        <div class="apexcharts-tooltip apexcharts-theme-dark">
                            <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                    class="apexcharts-tooltip-marker"
                                    style="background-color: rgb(22, 189, 202);"></span>
                                <div class="apexcharts-tooltip-text"
                                    style="font-family: Inter, sans-serif; font-size: 14px;">
                                    <div class="apexcharts-tooltip-y-group"><span
                                            class="apexcharts-tooltip-text-y-label"></span><span
                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span
                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span
                                            class="apexcharts-tooltip-text-z-label"></span><span
                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                            <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                    class="apexcharts-tooltip-marker"
                                    style="background-color: rgb(253, 186, 140);"></span>
                                <div class="apexcharts-tooltip-text"
                                    style="font-family: Inter, sans-serif; font-size: 14px;">
                                    <div class="apexcharts-tooltip-y-group"><span
                                            class="apexcharts-tooltip-text-y-label"></span><span
                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span
                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span
                                            class="apexcharts-tooltip-text-z-label"></span><span
                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                    class="apexcharts-tooltip-marker"
                                    style="background-color: rgb(26, 86, 219);"></span>
                                <div class="apexcharts-tooltip-text"
                                    style="font-family: Inter, sans-serif; font-size: 14px;">
                                    <div class="apexcharts-tooltip-y-group"><span
                                            class="apexcharts-tooltip-text-y-label"></span><span
                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span
                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span
                                            class="apexcharts-tooltip-text-z-label"></span><span
                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card Footer -->
                <div class="flex items-center justify-between pt-4 lg:justify-evenly sm:pt-6">
                    <div>
                        <svg class="w-8 h-8 mb-1 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.25A2.25 2.25 0 014.25 2h11.5A2.25 2.25 0 0118 4.25v8.5A2.25 2.25 0 0115.75 15h-3.105a3.501 3.501 0 001.1 1.677A.75.75 0 0113.26 18H6.74a.75.75 0 01-.484-1.323A3.501 3.501 0 007.355 15H4.25A2.25 2.25 0 012 12.75v-8.5zm1.5 0a.75.75 0 01.75-.75h11.5a.75.75 0 01.75.75v7.5a.75.75 0 01-.75.75H4.25a.75.75 0 01-.75-.75v-7.5z">
                            </path>
                        </svg>
                        <h3 class="text-gray-500 dark:text-gray-400">Desktop</h3>
                        <h4 class="text-xl font-bold dark:text-white">
                            234k
                        </h4>
                        <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                    </path>
                                </svg>
                                4%
                            </span>
                            vs last month
                        </p>
                    </div>
                    <div>
                        <svg class="w-8 h-8 mb-1 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M8 16.25a.75.75 0 01.75-.75h2.5a.75.75 0 010 1.5h-2.5a.75.75 0 01-.75-.75z"></path>
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M4 4a3 3 0 013-3h6a3 3 0 013 3v12a3 3 0 01-3 3H7a3 3 0 01-3-3V4zm4-1.5v.75c0 .414.336.75.75.75h2.5a.75.75 0 00.75-.75V2.5h1A1.5 1.5 0 0114.5 4v12a1.5 1.5 0 01-1.5 1.5H7A1.5 1.5 0 015.5 16V4A1.5 1.5 0 017 2.5h1z">
                            </path>
                        </svg>
                        <h3 class="text-gray-500 dark:text-gray-400">Phone</h3>
                        <h4 class="text-xl font-bold dark:text-white">
                            94k
                        </h4>
                        <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <span class="flex items-center mr-1.5 text-sm text-red-600 dark:text-red-500">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z">
                                    </path>
                                </svg>
                                1%
                            </span>
                            vs last month
                        </p>
                    </div>
                    <div>
                        <svg class="w-8 h-8 mb-1 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M5 1a3 3 0 00-3 3v12a3 3 0 003 3h10a3 3 0 003-3V4a3 3 0 00-3-3H5zM3.5 4A1.5 1.5 0 015 2.5h10A1.5 1.5 0 0116.5 4v12a1.5 1.5 0 01-1.5 1.5H5A1.5 1.5 0 013.5 16V4zm5.25 11.5a.75.75 0 000 1.5h2.5a.75.75 0 000-1.5h-2.5z">
                            </path>
                        </svg>
                        <h3 class="text-gray-500 dark:text-gray-400">Tablet</h3>
                        <h4 class="text-xl font-bold dark:text-white">
                            16k
                        </h4>
                        <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <span class="flex items-center mr-1.5 text-sm text-red-600 dark:text-red-500">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z">
                                    </path>
                                </svg>
                                0,6%
                            </span>
                            vs last month
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="xl:col-span-2">
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-1 gap-4">
                <div class="xl:px-2 w-full h-full">
                    <div class="flex items-center justify-between">
                        <h1>Live Cam depan</h1>
                        <button class="py-2 flex justify-center">
                            <label class="inline-flex items-center cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer">
                                <div
                                    class="relative w-12 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                </div>
                            </label>
                        </button>
                    </div>
                    <video id="webcam1" class="w-full h-auto border-2 border-[#800F2F]" autoplay
                        playsinline></video>
                </div>
                <div class="xl:px-2 w-full h-full">
                    <div class="flex items-center justify-between">
                        <h1>Live Cam depan</h1>
                        <button class="py-2 flex justify-center">
                            <label class="inline-flex items-center cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer">
                                <div
                                    class="relative w-12 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                </div>
                            </label>
                        </button>
                    </div>
                    <video id="webcam2" class="w-full h-auto border-2 border-[#800F2F]" autoplay
                        playsinline></video>
                </div>
            </div>
        </div>
    </section>


</x-layoutadmin>

<div class="grid grid-cols-1 xl:grid-cols-2 gap-4">


</div>


<style>
    #webcam1 {
        transform: scaleX(-1);
        /* Membalik tampilan secara horizontal */
    }

    #webcam2 {
        transform: scaleX(-1);
        /* Membalik tampilan secara horizontal */
    }
</style>
<script>
    async function startWebcams() {
        try {
            // Dapatkan daftar perangkat media
            const devices = await navigator.mediaDevices.enumerateDevices();
            const videoDevices = devices.filter(device => device.kind === 'videoinput');

            // Pastikan ada dua webcam yang terdeteksi
            if (videoDevices.length < 2) {
                console.error("Dua webcam tidak ditemukan.");
                return;
            }

            // Akses webcam pertama
            const stream1 = await navigator.mediaDevices.getUserMedia({
                video: {
                    deviceId: videoDevices[0].deviceId
                }
            });
            document.getElementById('webcam1').srcObject = stream1;

            // Akses webcam kedua
            const stream2 = await navigator.mediaDevices.getUserMedia({
                video: {
                    deviceId: videoDevices[1].deviceId
                }
            });
            document.getElementById('webcam2').srcObject = stream2;

        } catch (err) {
            console.error("Error accessing webcams: " + err);
        }
    }

    startWebcams();
</script> --}}
