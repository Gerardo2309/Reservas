<div >
    <!-- component -->

    <div class="flex flex-col flex-1 w-full overflow-y-auto">
        <main class="min-h-screen">
            <div class="grid  mb-4 pb-10 px-8 mx-4">
                <div class="grid grid-cols-12 gap-6">
                    <div class="grid grid-cols-12 col-span-12 gap-6 xxl:col-span-9">
                        <div class="col-span-12 mt-8">
                            <div class="flex items-center justify-between h-10 intro-y">
                                <h2 class="mr-5 text-xl font-bold truncate dark:text-gray-100">Paxs Del Dia
                                    {{ date('d-m-y') }}</h2>
                                    <div class="p-5 flex justify-end">
                                        @can('admin.paxes.create')
                                            @livewire('admin.paxes.paxes-create')
                                        @endcan
                                    </div>
                            </div>
                            <div class="grid grid-cols-12 sm:grid-cols-8 xl:grid-cols-10 gap-6 mt-5">
                                <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-4 xl:col-span-2 intro-y bg-white dark:bg-gray-900"
                                    href="#">
                                    <div class="p-5">
                                        <div class="flex justify-between">
                                            <div>
                                                <i class=" text-blue-400 fa-xl fa-solid fa-person"></i>
                                            </div>
                                            <div
                                                class="bg-green-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                                <span class="flex items-center">{{($totadults>0) ? round(($totadults*100)/$paxgral) : 0}}  %</span>
                                            </div>
                                        </div>
                                        <div class="ml-2 w-full flex-1">
                                            <div>
                                                <div class="mt-3 text-3xl font-bold leading-8">{{ $totadults }}</div>

                                                <div class="mt-1 text-base text-gray-600">Total de adultos</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-4 xl:col-span-2 intro-y bg-white dark:bg-gray-900"
                                    href="#">
                                    <div class="p-5">
                                        <div class="flex justify-between">
                                            <div>
                                                <i class=" text-blue-400 fa-xl fa-solid fa-child-reaching"></i>
                                            </div>
                                            <div
                                                class="bg-blue-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                                <span class="flex items-center">{{($totkids>0) ? round(($totkids*100)/$paxgral) : 0}} %</span>
                                            </div>
                                        </div>
                                        <div class="ml-2 w-full flex-1">
                                            <div>
                                                <div class="mt-3 text-3xl font-bold leading-8">{{ $totkids }}</div>

                                                <div class="mt-1 text-base text-gray-600">Total de Niños</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-4 xl:col-span-2 intro-y bg-white dark:bg-gray-900"
                                    href="#">
                                    <div class="p-5">
                                        <div class="flex justify-between">
                                            <div>
                                                <i class="text-blue-400 fa-xl fa-solid fa-clock"></i>

                                            </div>
                                            <div
                                                class="bg-blue-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                                <span class="flex items-center">{{($totq>0) ? round(($totq*100)/$totadults) : 0}} %</span>
                                            </div>
                                        </div>
                                        <div class="ml-2 w-full flex-1">
                                            <div>
                                                <div class="mt-3 text-3xl font-bold leading-8">{{ $totq }}</div>

                                                <div class="mt-1 text-base text-gray-600">Total Pax Q</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-4 xl:col-span-2 intro-y bg-white dark:bg-gray-900"
                                    href="#">
                                    <div class="p-5">
                                        <div class="flex justify-between">
                                            <div>
                                                <i class="text-green-400 fa-xl fa-solid fa-clock"></i>

                                            </div>
                                            <div
                                                class="bg-green-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                                <span class="flex items-center">{{($totnq>0) ? round(($totnq*100)/$totadults) : 0}} %</span>
                                            </div>
                                        </div>
                                        <div class="ml-2 w-full flex-1">
                                            <div>
                                                <div class="mt-3 text-3xl font-bold leading-8">{{ $totnq }}</div>

                                                <div class="mt-1 text-base text-gray-600">Total Pax NQ</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-4 xl:col-span-2 intro-y bg-white dark:bg-gray-900"
                                    href="#">
                                    <div class="p-5">
                                        <div class="flex justify-between">
                                            <div>
                                                <i class="text-blue-400 fa-solid fa-users fa-xl"></i>
                                            </div>
                                            <div
                                                class="bg-blue-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                                <span class="flex items-center">{{($paxgral>0) ? round(($paxgral*100)/$paxgral) : 0}} %</span>
                                            </div>
                                        </div>
                                        <div class="ml-2 w-full flex-1">
                                            <div>
                                                <div class="mt-3 text-3xl font-bold leading-8">{{ $paxgral }}
                                                </div>

                                                <div class="mt-1 text-base text-gray-600">Total General Pax</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-span-12 mt-5">
                            <div class="grid gap-2 grid-cols-1 lg:grid-cols-2">
                                <div class="bg-white dark:bg-gray-900 shadow-lg p-4" id="chartline"></div>
                                <div class="bg-white dark:bg-gray-900 shadow-lg" id="chartpie"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>
        var chart = document.querySelector('#chartline')
        var options = {
            series: [{
                name: 'Pax Q',
                type: 'area',
                data: {!! json_encode($g1paxq) !!}
            }, {
                name: 'Pax NQ',
                type: 'line',
                data: {!! json_encode($g1paxnq) !!}
            }],
            chart: {
                height: 350,
                type: 'line',
                zoom: {
                    enabled: false
                }
            },
            stroke: {
                curve: 'smooth'
            },
            fill: {
                type: 'solid',
                opacity: [0.35, 1],
            },
            labels: {!! json_encode($dates) !!},
            markers: {
                size: 0
            },
            yaxis: [{
                    title: {
                        text: 'Series A',
                    },
                },
                {
                    opposite: true,
                    title: {
                        text: 'Series B',
                    },
                },
            ],
            tooltip: {
                shared: true,
                intersect: false,
                y: {
                    formatter: function(y) {
                        if (typeof y !== "undefined") {
                            return y.toFixed(0) + " points";
                        }
                        return y;
                    }
                }
            }
        };
        var chart = new ApexCharts(chart, options);
        chart.render();
    </script>
    <script>
        var chart = document.querySelector('#chartpie')
        var options = {
            series: [{!! $porq !!}, {!! $pornq !!}],
            chart: {
                height: 350,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    dataLabels: {
                        name: {
                            fontSize: '22px',
                        },
                        value: {
                            fontSize: '16px',
                        },
                        total: {
                            show: true,
                            label: 'Total Adults',
                            formatter: function(w) {
                                // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                                return {!! $totadults !!}
                            }
                        }
                    }
                }
            },
            labels: ['Pax Q', 'Pax NQ'],
            title: {
                text: 'Pax Q and NQ',
                align: 'left',
                margin: 30,
                offsetX: 25,
                offsetY: 15,
                floating: false,
                style: {
                    fontSize: '16px',
                    fontWeight: 'bold',
                    color: '#263238'
                },
            }
        };
        var chart = new ApexCharts(chart, options);
        chart.render();
    </script>

</div>
