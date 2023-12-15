<x-app-layout>
    <div class="duration-500 p-4 sm:ml-48"
         :class="{ ' sm:ml-80 sm:pl-12 z-10': !expandedSideBar ,  ' sm:ml-96 sm:pl-16 md:pl-24 z-10': expandedSideBar}"
    >
        <div class="p-4 my-14">
            <style>
                #ayah-text {
                    direction: rtl;
                    font-family: Ayah;
                }
            </style>
            <style id="ayah-font">@font-face { font-family: Ayah; font-display: block; src: url(https://quran.com/fonts/quran/hafs/uthmanic_hafs/UthmanicHafs1Ver18.woff2); } </style>
            <div id="ayah-text">ﱆﱆﱆﱆ</div>
            <br>

            <div style="direction: rtl" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-6 gap-4 mb-4">
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/001-alif.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-primary-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/sfd.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Elif
                            </p>
                        </div>

                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-300">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-primary">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/ba.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/seL.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Be
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/003-taa.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/skA.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Te
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/004-tha.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/skA.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                The
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/005-jeem.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/sim.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Xhim
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/006-haa.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/skg.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Ha
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-primary">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/007-khaa.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/skh.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Ha'
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/008-dal.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/smQ.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Dal
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/009-dhal.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/skC.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Dhal
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/010-raa.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/siy.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Ra
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/011-jaa.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/skQ.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Zej
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/012-seen.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/smR.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Sin
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/013-sheen.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/smZ.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Shin
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/014-saad.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/skD.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Sad
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/015-dhaad.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/smj.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Dad
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/016-toa.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/skt.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Ta
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/017-dhaa.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/ski.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Dha
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/018-ain.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/skE.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Ajn
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/019-ghain.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/sin.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Gajn
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/020-faa.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/smS.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Fe
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/021-qaaf.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/skw.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Kaf
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/022-kaaf.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/smF.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Kef
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/023-laam.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/sku.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Lam
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/024-meem.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/sk_.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Mim
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/025-noon.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/skF.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Nun
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/027-ha.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/smk.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                He
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/026-waw.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/smm.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Vav
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/029-yaa.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/sm_.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Je
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </div>
</x-app-layout>
