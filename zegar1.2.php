<!DOCTYPE html>
<html>
    <head>
        <style>
            .list-mh{
                max-height: calc(63.5*6px);
            }
            .rozmiar{
                font-size: 10rem;
            }
        </style>
        <script>
            function czas(){
                document.querySelector("#u").value = new Date().getTimezoneOffset()/-60;
                document.querySelector("#s").value = document.querySelector("#u").value;
                document.querySelector("#strefa").textContent = `
                    ${document.querySelector('li[data-hour="' + document.querySelector("#u").value + '"]').firstElementChild.textContent}
                    ${document.querySelector('li[data-hour="' + document.querySelector("#u").value + '"]').lastElementChild.textContent}
                `;
                document.querySelector(".list-mh").addEventListener("click", function(e){
                    document.querySelector("#s").value = parseInt(e.target.getAttribute("data-hour"), 10);
                    document.querySelector("#strefa").textContent = `
                        ${document.querySelector('li[data-hour="' + document.querySelector("#s").value + '"]').firstElementChild.textContent}
                        ${document.querySelector('li[data-hour="' + document.querySelector("#s").value + '"]').lastElementChild.textContent}
                    `;
                });
                window.setInterval(function(){
                    var d = new Date().getTime();
                    d = d - parseInt(document.querySelector("#u").value, 10) * 60 * 60 * 1000;
                    d = d + parseInt(document.querySelector("#s").value, 10) * 60 * 60 * 1000;
                    d = new Date(d);
                    document.querySelector("#txt").textContent = `
                        ${d.getHours()}:${d.getMinutes()<10?`0${d.getMinutes()}`:d.getMinutes()}:${d.getSeconds()<10?`0${d.getSeconds()}`:d.getSeconds()}
                    `
                }, 1000);
            }
        </script>
        <link href="https://unpkg.com/tailwindcss@%5E2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-800 text-white" onload="czas()">
       <nav class="bg-gray-900">
           <div class="container mx-auto py-6 px-8 flex items-center justify-between">
               <h1 class="text-2xl font-bold">
                   Czas światowy
               </h1>
           </div>
       </nav>
       <div class="flex items-center justify-center mt-32 container mx-auto px-8">
            <div class="w-2/3">
                <div class="rozmiar font-semibold" id="txt"></div>
                <h1 class="text-5xl pl-3" id="strefa"></h1>
            </div>
            <div class="w-1/3">
            <ul>
                <li class="text-3xl font-semibold bg-blue-600 px-4 py-4 rounded-t-lg"> 
                    Strefa czasowa
                </li>
                <div class="overflow-y-scroll list-mh rounded-b-lg">
                </li>
                <li class="bg-white font-semibold px-4 py-4 text-gray-900 cursor-pointer text-2xl flex items-center justify-between" data-hour="-12">
                    <span data-hour="-12">UTC-12 </span>
                    <span data-hour="-12">Kamczatka </span>
                </li>
                <li class="bg-white font-semibold px-4 py-4 text-gray-900 cursor-pointer text-2xl flex items-center justify-between" data-hour="-11">
                    <span data-hour="-11">UTC-11 </span>
                    <span data-hour="-11">Wyspy Salomona </span>
                </li>
                <li class="bg-white font-semibold px-4 py-4 text-gray-900 cursor-pointer text-2xl flex items-center justify-between" data-hour="-10">
                    <span data-hour="-10">UTC-10 </span>
                    <span data-hour="-10">Hawaje </span>
                </li>
                <li class="bg-white font-semibold px-4 py-4 text-gray-900 cursor-pointer text-2xl flex items-center justify-between" data-hour="-9">
                    <span data-hour="-9">UTC-9 </span>
                    <span data-hour="-9">Polinezja Francuska </span>
                </li>
                <li class="bg-white font-semibold px-4 py-4 text-gray-900 cursor-pointer text-2xl flex items-center justify-between" data-hour="-8">
                    <span data-hour="-8">UTC-8 </span>
                    <span data-hour="-8">Anchorage </span>
                </li>
                <li class="bg-white font-semibold px-4 py-4 text-gray-900 cursor-pointer text-2xl flex items-center justify-between" data-hour="-7">
                    <span data-hour="-7">UTC-7 </span>
                    <span data-hour="-7">Los Angeles </span>
                </li>
                <li class="bg-white font-semibold px-4 py-4 text-gray-900 cursor-pointer text-2xl flex items-center justify-between" data-hour="-6">
                    <span data-hour="-6">UTC-6 </span>
                    <span data-hour="-6">El Limón </span>
                </li>
                <li class="bg-white font-semibold px-4 py-4 text-gray-900 cursor-pointer text-2xl flex items-center justify-between" data-hour="-5">
                    <span data-hour="-5">UTC-5 </span>
                    <span data-hour="-5">Chicago </span>
                </li>
                <li class="bg-white font-semibold px-4 py-4 text-gray-900 cursor-pointer text-2xl flex items-center justify-between" data-hour="-4">
                    <span data-hour="-4">UTC-4 </span>
                    <span data-hour="-4">New York </span>
                </li>
                <li class="bg-white font-semibold px-4 py-4 text-gray-900 cursor-pointer text-2xl flex items-center justify-between" data-hour="-3">
                    <span data-hour="-3">UTC-3 </span>
                    <span data-hour="-3">Buenos Aires </span>
                </li>
                <li class="bg-white font-semibold px-4 py-4 text-gray-900 cursor-pointer text-2xl flex items-center justify-between" data-hour="-2">
                    <span data-hour="-2">UTC-2 </span>
                    <span data-hour="-2">Sain-Pierre </span>
                </li>
                <li class="bg-white font-semibold px-4 py-4 text-gray-900 cursor-pointer text-2xl flex items-center justify-between" data-hour="-1">
                    <span data-hour="-1">UTC-1 </span>
                    <span data-hour="-1">Republika Zielonego Przylądka </span>
                </li>
                <li class="bg-white font-semibold px-4 py-4 text-gray-900 cursor-pointer text-2xl flex items-center justify-between" data-hour="0">
                    <span data-hour="0">UTC-0 </span>
                    <span data-hour="0">Londyn </span>
                </li>
                <li class="bg-white font-semibold px-4 py-4 text-gray-900 cursor-pointer text-2xl flex items-center justify-between" data-hour="1">
                    <span data-hour="1">UTC+1 </span>
                    <span data-hour="1">Warszawa </span>
                </li>
                <li class="bg-white font-semibold px-4 py-4 text-gray-900 cursor-pointer text-2xl flex items-center justify-between" data-hour="2">
                    <span data-hour="2">UTC+2 </span>
                    <span data-hour="2">Kapsztad </span>
                </li>
                <li class="bg-white font-semibold px-4 py-4 text-gray-900 cursor-pointer text-2xl flex items-center justify-between" data-hour="3">
                    <span data-hour="3">UTC+3 </span>
                    <span data-hour="3">Moskwa </span>
                </li>
                <li class="bg-white font-semibold px-4 py-4 text-gray-900 cursor-pointer text-2xl flex items-center justify-between" data-hour="4">
                    <span data-hour="4">UTC+4 </span>
                    <span data-hour="4">Baku </span>
                </li>
                <li class="bg-white font-semibold px-4 py-4 text-gray-900 cursor-pointer text-2xl flex items-center justify-between" data-hour="5">
                    <span data-hour="5">UTC+5 </span>
                    <span data-hour="5">Karaczi </span>
                </li>
                <li class="bg-white font-semibold px-4 py-4 text-gray-900 cursor-pointer text-2xl flex items-center justify-between" data-hour="6">
                    <span data-hour="6">UTC+6 </span>
                    <span data-hour="6">Nur-Sułtan </span>
                </li>
                <li class="bg-white font-semibold px-4 py-4 text-gray-900 cursor-pointer text-2xl flex items-center justify-between" data-hour="7">
                    <span data-hour="7">UTC+7 </span>
                    <span data-hour="7">Dżakarta </span>
                </li>
                <li class="bg-white font-semibold px-4 py-4 text-gray-900 cursor-pointer text-2xl flex items-center justify-between" data-hour="8">
                    <span data-hour="8">UTC+8 </span>
                    <span data-hour="8">Pekin </span>
                </li>
                <li class="bg-white font-semibold px-4 py-4 text-gray-900 cursor-pointer text-2xl flex items-center justify-between" data-hour="9">
                    <span data-hour="9">UTC+9 </span>
                    <span data-hour="9">Tokio </span>
                </li>
                <li class="bg-white font-semibold px-4 py-4 text-gray-900 cursor-pointer text-2xl flex items-center justify-between" data-hour="10">
                    <span data-hour="10">UTC+10 </span>
                    <span data-hour="10">Władywostok </span>
                </li>
                <li class="bg-white font-semibold px-4 py-4 text-gray-900 cursor-pointer text-2xl flex items-center justify-between" data-hour="11">
                    <span data-hour="11">UTC+11 </span>
                    <span data-hour="11">Sydney </span>
                </li>
                <li class="bg-white font-semibold px-4 py-4 text-gray-900 cursor-pointer text-2xl flex items-center justify-between" data-hour="12">
                    <span data-hour="12">UTC+12 </span>
                    <span data-hour="12">Fidżi </span>
                </li>
                <li class="bg-white font-semibold px-4 py-4 text-gray-900 cursor-pointer text-2xl flex items-center justify-between" data-hour="13">
                    <span data-hour="13">UTC+13 </span>
                    <span data-hour="13">Wellington </span>
                </li>
                <li class="bg-white font-semibold px-4 py-4 text-gray-900 cursor-pointer text-2xl flex items-center justify-between" data-hour="14">
                    <span data-hour="14">UTC+14 </span>
                    <span data-hour="14">Samoa </span>
                </li>
                </div>
            </ul>
            </div>
       </div>
    <input type="hidden" id="u">
    <input type="hidden" id="s">
    </body>
</html>