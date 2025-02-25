<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <style>
        .header {
            text-align: center;
        }

        ul {
            display: flex;
            flex-wrap: wrap;
            padding: 10px 50px;
            margin: auto;
            justify-content: space-evenly;
        }

        ul li {
            width: 22%;
            padding: 5px 10px;
            border-radius: 10px;
            border: 1px solid #ccc;
            box-shadow: 1px 1px 10px #999;
            margin: 16px 0;
            height: 250px;
            list-style-type: none;
        }

        ul li:hover {
            background: lightgreen;
            padding: 8px 13px;
            font-size: 18px;
        }

        #map {
            height: 300px;
        }

        #clearMap {
            margin: auto;
            border-radius: 10px;
            position: fixed;
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>

<body>
    <h1 class="header">JS+jquery串高雄輕軌</h1>
    <div class="title"></div>
    <div id="map"></div>
    <button id="clearMap">先清除地圖，才能按輕軌卡片</button>
    <h4></h4>
    <ul></ul>
    <script>
        $(document).ready(function () {
            $("#0").click(function () {
                var map = L.map('map').setView([22.6046547, 120.3246512], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.6046547, 120.3246512]).addTo(map)
                    .bindPopup('籬仔內站')
                    .openPopup();
                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;  // 清除map實例
                    }
                });

            });
            $("#1").click(function () {
                var map = L.map('map').setView([22.5995071, 120.3197511], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.5995071, 120.3197511]).addTo(map)
                    .bindPopup('凱旋瑞田站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null; // 清除map實例
                    }
                });
            });
            $("#2").click(function () {
                var map = L.map('map').setView([22.5954767, 120.3153478], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.5995071, 120.3197511]).addTo(map)
                    .bindPopup('前鎮之星站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#3").click(function () {
                var map = L.map('map').setView([22.5936295, 120.310496], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.5936295, 120.310496]).addTo(map)
                    .bindPopup('凱旋中華站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#4").click(function () {
                var map = L.map('map').setView([22.5948593, 120.3049849], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.5948593, 120.3049849]).addTo(map)
                    .bindPopup('夢時代站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });

            $("#5").click(function () {
                var map = L.map('map').setView([22.6009345, 120.3026403], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.6009345, 120.3026403]).addTo(map)
                    .bindPopup('經貿園區站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#6").click(function () {
                var map = L.map('map').setView([22.6056585, 120.3008122], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.6056585, 120.3008122]).addTo(map)
                    .bindPopup('軟體園區站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#7").click(function () {
                var map = L.map('map').setView([22.6101078, 120.2980026], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.6101078, 120.2980026]).addTo(map)
                    .bindPopup('高雄展覽館站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#8").click(function () {
                var map = L.map('map').setView([22.6115998, 120.2934187], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.6115998, 120.2934187]).addTo(map)
                    .bindPopup('旅運中心站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#9").click(function () {
                var map = L.map('map').setView([22.6167276, 120.2931869], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.6167276, 120.2931869]).addTo(map)
                    .bindPopup('光榮碼頭站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#10").click(function () {
                var map = L.map('map').setView([22.61929, 120.2894459], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.61929, 120.2894459]).addTo(map)
                    .bindPopup('真愛碼頭站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#11").click(function () {
                var map = L.map('map').setView([22.6185377, 120.2841808], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.6185377, 120.2841808]).addTo(map)
                    .bindPopup('駁二大義站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });

            $("#12").click(function () {
                var map = L.map('map').setView([22.6204699, 120.2799125], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.6204699, 120.2799125]).addTo(map)
                    .bindPopup('駁二蓬萊站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#13").click(function () {
                var map = L.map('map').setView([22.6215919, 120.2758292], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.6215919, 120.2758292]).addTo(map)
                    .bindPopup('哈瑪星站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#14").click(function () {
                var map = L.map('map').setView([22.62654, 120.2786], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.62654, 120.2786]).addTo(map)
                    .bindPopup('壽山公園站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#15").click(function () {
                var map = L.map('map').setView([22.62959, 120.2807], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.62959, 120.2807]).addTo(map)
                    .bindPopup('文武聖殿站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#16").click(function () {
                var map = L.map('map').setView([22.6359, 120.2826], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.6359, 120.2826]).addTo(map)
                    .bindPopup('鼓山區公所站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#17").click(function () {
                var map = L.map('map').setView([22.642009, 120.2810928], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.642009, 120.2810928]).addTo(map)
                    .bindPopup('鼓山站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#18").click(function () {
                var map = L.map('map').setView([22.6470528, 120.2814855], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.6470528, 120.2814855]).addTo(map)
                    .bindPopup('馬卡道站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#19").click(function () {
                var map = L.map('map').setView([22.65211753, 120.2817916], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.65211753, 120.2817916]).addTo(map)
                    .bindPopup('臺鐵美術館站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#20").click(function () {
                var map = L.map('map').setView([22.65500075, 120.2828856], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.65500075, 120.2828856]).addTo(map)
                    .bindPopup('內惟藝術中心站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#21").click(function () {
                var map = L.map('map').setView([22.65504612, 120.2872437], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.65504612, 120.2872437]).addTo(map)
                    .bindPopup('美術館站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#22").click(function () {
                var map = L.map('map').setView([22.65480602, 120.2909322], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.65480602, 120.2909322]).addTo(map)
                    .bindPopup('聯合醫院站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#23").click(function () {
                var map = L.map('map').setView([22.65447406, 120.2946752], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.65447406, 120.2946752]).addTo(map)
                    .bindPopup('龍華國小站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#24").click(function () {
                var map = L.map('map').setView([22.65603647, 120.3027531], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.65603647, 120.3027531]).addTo(map)
                    .bindPopup('愛河之心站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#25").click(function () {
                var map = L.map('map').setView([22.65628773, 120.3038127], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.65628773, 120.3038127]).addTo(map)
                    .bindPopup('愛河之心站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#26").click(function () {
                var map = L.map('map').setView([22.65667514, 120.3083518], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.65667514, 120.3083518]).addTo(map)
                    .bindPopup('新上國小站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#27").click(function () {
                var map = L.map('map').setView([22.65657845, 120.3092359], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.65657845, 120.3092359]).addTo(map)
                    .bindPopup('新上國小站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });

            $("#28").click(function () {
                var map = L.map('map').setView([22.65555967, 120.3149847], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.65555967, 120.3149847]).addTo(map)
                    .bindPopup('大順民族站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#29").click(function () {
                var map = L.map('map').setView([22.65535303, 120.3159292], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.65535303, 120.3159292]).addTo(map)
                    .bindPopup('大順民族站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#30").click(function () {
                var map = L.map('map').setView([22.65375623, 120.3185601], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.65375623, 120.3185601]).addTo(map)
                    .bindPopup('灣仔內站(大順鼎山)')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#31").click(function () {
                var map = L.map('map').setView([22.65335516, 120.319221], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.65335516, 120.319221]).addTo(map)
                    .bindPopup('灣仔內站(大順鼎山)')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#32").click(function () {
                var map = L.map('map').setView([22.65001014, 120.3238178], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.65001014, 120.3238178]).addTo(map)
                    .bindPopup('高雄高工站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#33").click(function () {
                var map = L.map('map').setView([22.64953119, 120.324533], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.64953119, 120.324533]).addTo(map)
                    .bindPopup('高雄高工站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#34").click(function () {
                var map = L.map('map').setView([22.64414704, 120.3262116], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.64414704, 120.3262116]).addTo(map)
                    .bindPopup('樹德家商站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#35").click(function () {
                var map = L.map('map').setView([22.64337399, 120.3265487], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.64337399, 120.3265487]).addTo(map)
                    .bindPopup('樹德家商站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#36").click(function () {
                var map = L.map('map').setView([22.63752371, 120.3273676], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.63752371, 120.3273676]).addTo(map)
                    .bindPopup('科工館站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#37").click(function () {
                var map = L.map('map').setView([22.63643343, 120.3270061], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.63643343, 120.3270061]).addTo(map)
                    .bindPopup('科工館站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#38").click(function () {
                var map = L.map('map').setView([22.6331814, 120.3258383], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.6331814, 120.3258383]).addTo(map)
                    .bindPopup('聖功醫院站(道明中學)')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#39").click(function () {
                var map = L.map('map').setView([22.63240787, 120.3253824], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.63240787, 120.3253824]).addTo(map)
                    .bindPopup('聖功醫院站(道明中學)')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#40").click(function () {
                var map = L.map('map').setView([22.62945, 120.32283], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.62945, 120.32283]).addTo(map)
                    .bindPopup('凱旋公園站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#41").click(function () {
                var map = L.map('map').setView([22.6252, 120.32368], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.6252, 120.32368]).addTo(map)
                    .bindPopup('衛生局站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });

            $("#42").click(function () {
                var map = L.map('map').setView([22.62121, 120.32519], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.62121, 120.32519]).addTo(map)
                    .bindPopup('五權國小站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#43").click(function () {
                var map = L.map('map').setView([22.616931, 120.32685], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.616931, 120.32685]).addTo(map)
                    .bindPopup('凱旋武昌站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#44").click(function () {
                var map = L.map('map').setView([22.612526, 120.327175], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.612526, 120.327175]).addTo(map)
                    .bindPopup('凱旋二聖站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
            $("#45").click(function () {
                var map = L.map('map').setView([22.608503, 120.326069], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([22.608503, 120.326069]).addTo(map)
                    .bindPopup('輕軌機廠站')
                    .openPopup();

                $("#clearMap").click(function () {
                    if (map) {
                        map.remove();
                        map = null;// 清除map實例
                    }
                });
            });
        });

        let data = [
            {
                Seq: 1,
                車站編號: "C1",
                車站中文名稱: "籬仔內站",
                車站英文名稱: "Lizihnei",
                Longitude: 120.3246512,
                Latitude: 22.6046547
            },
            {
                Seq: 2,
                車站編號: "C2",
                車站中文名稱: "凱旋瑞田站",
                車站英文名稱: "Kaisyuan Rueitian",
                Longitude: 120.3197511,
                Latitude: 22.5995071
            },
            {
                Seq: 3,
                車站編號: "C3",
                車站中文名稱: "前鎮之星站",
                車站英文名稱: "Cianjhen Star",
                Longitude: 120.3153478,
                Latitude: 22.5954767
            },
            {
                Seq: 4,
                車站編號: "C4",
                車站中文名稱: "凱旋中華站",
                車站英文名稱: "Kaisyuan Jhonghua",
                Longitude: 120.310496,
                Latitude: 22.5936295
            },
            {
                Seq: 5,
                車站編號: "C5",
                車站中文名稱: "夢時代站",
                車站英文名稱: "Dream Mall",
                Longitude: 120.3049849,
                Latitude: 22.5948593
            },
            {
                Seq: 6,
                車站編號: "C6",
                車站中文名稱: "經貿園區站",
                車站英文名稱: "Commerce and Trade Park",
                Longitude: 120.3026403,
                Latitude: 22.6009345
            },
            {
                Seq: 7,
                車站編號: "C7",
                車站中文名稱: "軟體園區站",
                車站英文名稱: "Software Technology Park",
                Longitude: 120.3008122,
                Latitude: 22.6056585
            },
            {
                Seq: 8,
                車站編號: "C8",
                車站中文名稱: "高雄展覽館站",
                車站英文名稱: "Kaohsiung Exhibition Center",
                Longitude: 120.2980026,
                Latitude: 22.6101078
            },
            {
                Seq: 9,
                車站編號: "C9",
                車站中文名稱: "旅運中心站",
                車站英文名稱: "Cruise Terminal",
                Longitude: 120.2934187,
                Latitude: 22.6115998
            },
            {
                Seq: 10,
                車站編號: "C10",
                車站中文名稱: "光榮碼頭站",
                車站英文名稱: "Glory Pier",
                Longitude: 120.2931869,
                Latitude: 22.6167276
            },
            {
                Seq: 11,
                車站編號: "C11",
                車站中文名稱: "真愛碼頭站",
                車站英文名稱: "Love Pier",
                Longitude: 120.2894459,
                Latitude: 22.61929
            },
            {
                Seq: 12,
                車站編號: "C12",
                車站中文名稱: "駁二大義站",
                車站英文名稱: "Dayi Pier-2",
                Longitude: 120.2841808,
                Latitude: 22.6185377
            },
            {
                Seq: 13,
                車站編號: "C13",
                車站中文名稱: "駁二蓬萊站",
                車站英文名稱: "Penglai Pier-2",
                Longitude: 120.2799125,
                Latitude: 22.6204699
            },
            {
                Seq: 14,
                車站編號: "C14",
                車站中文名稱: "哈瑪星站",
                車站英文名稱: "Hamasen",
                Longitude: 120.2758292,
                Latitude: 22.6215919
            },
            {
                Seq: 15,
                車站編號: "C15",
                車站中文名稱: "壽山公園站",
                車站英文名稱: "Shoushan Park",
                Longitude: 120.2786,
                Latitude: 22.62654
            },
            {
                Seq: 16,
                車站編號: "C16",
                車站中文名稱: "文武聖殿站",
                車站英文名稱: "Wenwu Temple",
                Longitude: 120.2807,
                Latitude: 22.62959
            },
            {
                Seq: 17,
                車站編號: "C17",
                車站中文名稱: "鼓山區公所站",
                車站英文名稱: "Gushan District Office",
                Longitude: 120.2826,
                Latitude: 22.6359
            },
            {
                Seq: 18,
                車站編號: "C18",
                車站中文名稱: "鼓山站",
                車站英文名稱: "Gushan",
                Longitude: 120.2810928,
                Latitude: 22.642009
            },
            {
                Seq: 19,
                車站編號: "C19",
                車站中文名稱: "馬卡道站",
                車站英文名稱: "Makadao",
                Longitude: 120.2814855,
                Latitude: 22.6470528
            },
            {
                Seq: 20,
                車站編號: "C20",
                車站中文名稱: "臺鐵美術館站",
                車站英文名稱: "TRA Museum of Fine Arts",
                Longitude: 120.2817916,
                Latitude: 22.65211753
            },
            {
                Seq: 21,
                車站編號: "C21A",
                車站中文名稱: "內惟藝術中心站",
                車站英文名稱: "Neiwei Arts Center",
                Longitude: 120.2828856,
                Latitude: 22.65500075
            },
            {
                Seq: 22,
                車站編號: "C21",
                車站中文名稱: "美術館站",
                車站英文名稱: "Kaohsiung Museum of Fine Arts",
                Longitude: 120.2872437,
                Latitude: 22.65504612
            },
            {
                Seq: 23,
                車站編號: "C22",
                車站中文名稱: "聯合醫院站",
                車站英文名稱: "Kaohsiung Municipal United Hospital",
                Longitude: 120.2909322,
                Latitude: 22.65480602
            },
            {
                Seq: 24,
                車站編號: "C23",
                車站中文名稱: "龍華國小站",
                車站英文名稱: "Longhua Elementary School",
                Longitude: 120.2946752,
                Latitude: 22.65447406
            },
            {
                Seq: 25,
                車站編號: "C24(順行)",
                車站中文名稱: "愛河之心站",
                車站英文名稱: "Heart of Love River",
                Longitude: 120.3027531,
                Latitude: 22.65603647
            },
            {
                Seq: 26,
                車站編號: "C24(逆行)",
                車站中文名稱: "愛河之心站",
                車站英文名稱: "Heart of Love River",
                Longitude: 120.3038127,
                Latitude: 22.65628773
            },
            {
                Seq: 27,
                車站編號: "C25(順行)",
                車站中文名稱: "新上國小站",
                車站英文名稱: "Sinshang Elementary School",
                Longitude: 120.3083518,
                Latitude: 22.65667514
            },
            {
                Seq: 28,
                車站編號: "C25(逆行)",
                車站中文名稱: "新上國小站",
                車站英文名稱: "Sinshang Elementary School",
                Longitude: 120.3092359,
                Latitude: 22.65657845
            },
            {
                Seq: 29,
                車站編號: "C26(順行)",
                車站中文名稱: "大順民族站",
                車站英文名稱: "Dashun Minzu",
                Longitude: 120.3149847,
                Latitude: 22.65555967
            },
            {
                Seq: 30,
                車站編號: "C26(逆行)",
                車站中文名稱: "大順民族站",
                車站英文名稱: "Dashun Minzu",
                Longitude: 120.3159292,
                Latitude: 22.65535303
            },
            {
                Seq: 31,
                車站編號: "C27(順行)",
                車站中文名稱: "灣仔內站(大順鼎山)",
                車站英文名稱: "Wanzihnei(Dashun Dingshan)",
                Longitude: 120.3185601,
                Latitude: 22.65375623
            },
            {
                Seq: 32,
                車站編號: "C27(逆行)",
                車站中文名稱: "灣仔內站(大順鼎山)",
                車站英文名稱: "Wanzihnei(Dashun Dingshan)",
                Longitude: 120.319221,
                Latitude: 22.65335516
            },
            {
                Seq: 33,
                車站編號: "C28(順行)",
                車站中文名稱: "高雄高工站",
                車站英文名稱: "Kaohsiung Industrial High School",
                Longitude: 120.3238178,
                Latitude: 22.65001014
            },
            {
                Seq: 34,
                車站編號: "C28(逆行)",
                車站中文名稱: "高雄高工站",
                車站英文名稱: "Kaohsiung Industrial High School",
                Longitude: 120.324533,
                Latitude: 22.64953119
            },
            {
                Seq: 35,
                車站編號: "C29(順行)",
                車站中文名稱: "樹德家商站",
                車站英文名稱: "Shu-Te Home-Economics & Commercial High School",
                Longitude: 120.3262116,
                Latitude: 22.64414704
            },
            {
                Seq: 36,
                車站編號: "C29(逆行)",
                車站中文名稱: "樹德家商站",
                車站英文名稱: "Shu-Te Home-Economics & Commercial High School",
                Longitude: 120.3265487,
                Latitude: 22.64337399
            },
            {
                Seq: 37,
                車站編號: "C30(順行)",
                車站中文名稱: "科工館站",
                車站英文名稱: "Science and Technology Museum",
                Longitude: 120.3273676,
                Latitude: 22.63752371
            },
            {
                Seq: 38,
                車站編號: "C30(逆行)",
                車站中文名稱: "科工館站",
                車站英文名稱: "Science and Technology Museum",
                Longitude: 120.3270061,
                Latitude: 22.63643343
            },
            {
                Seq: 39,
                車站編號: "C31(順行)",
                車站中文名稱: "聖功醫院站(道明中學)",
                車站英文名稱: "St.Joseph Hospital(St. Dominic Catholic High School)",
                Longitude: 120.3258383,
                Latitude: 22.6331814
            },
            {
                Seq: 40,
                車站編號: "C31(逆行)",
                車站中文名稱: "聖功醫院站(道明中學)",
                車站英文名稱: "St.Joseph Hospital(St. Dominic Catholic High School)",
                Longitude: 120.3253824,
                Latitude: 22.63240787
            },
            {
                Seq: 41,
                車站編號: "C32",
                車站中文名稱: "凱旋公園站",
                車站英文名稱: "Kaisyuan Park",
                Longitude: 120.32283,
                Latitude: 22.62945
            },
            {
                Seq: 42,
                車站編號: "C33",
                車站中文名稱: "衛生局站",
                車站英文名稱: "Department of Health",
                Longitude: 120.32368,
                Latitude: 22.6252
            },
            {
                Seq: 43,
                車站編號: "C34",
                車站中文名稱: "五權國小站",
                車站英文名稱: "Wucyuan Elementary School",
                Longitude: 120.32519,
                Latitude: 22.62121
            },
            {
                Seq: 44,
                車站編號: "C35",
                車站中文名稱: "凱旋武昌站",
                車站英文名稱: "Kaisyuan Wuchang",
                Longitude: 120.32685,
                Latitude: 22.616931
            },
            {
                Seq: 45,
                車站編號: "C36",
                車站中文名稱: "凱旋二聖站",
                車站英文名稱: "Kaisyuan Ersheng",
                Longitude: 120.327175,
                Latitude: 22.612526
            },
            {
                Seq: 46,
                車站編號: "C37",
                車站中文名稱: "輕軌機廠站",
                車站英文名稱: "LRT Depot",
                Longitude: 120.326069,
                Latitude: 22.608503
            }
        ]
        console.log(data[0].車站中文名稱);
        console.log(data[0].Longitude);
        console.log(data[0].Latitude);
        console.log(data.length);
        for (let i = 0; i < data.length; i++) {
            let li = '';
            li += `<li id='${i}'>`;
            li += `${data[i].車站中文名稱}`;
            li += `<br>`;
            li += `經度:${data[i].Longitude}`;
            li += `<br>`;
            li += `緯度:${data[i].Latitude}`;
            li += `</li>`;
            $('ul').append(li);
        }
    </script>
</body>

</html>