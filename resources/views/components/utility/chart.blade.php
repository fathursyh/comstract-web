<script>
    const getChartData = async () => {
        const url = '<?= Request::url() ?>/getChartData';
        try {
            fetch(url, {
                method: 'GET',
            }).then((res) => {
                return res.json();
            }).then((data) => {
                if (data) {
                    for (let i = 0; i < 3; i++) {
                        options.series[i].data = data[i];
                    }
                } else {
                    options.series = [];
                    options.grid.position = 'front';
                }
                const chart = new ApexCharts(document.getElementById("area-chart"), options);
                chart.render();
            })
        } catch (e) {
            console.error(e);
        }
    };

    const options = {
        noData: {
            text: '< TIDAK ADA DATA >',
            align: 'center',
            verticalAlign: 'top',
            offsetX: 0,
            offsetY: 0,
            style: {
                color: '#fa493c',
                position: 'front',
                fontSize: '30px',
                fontFamily: 'Poppins'
            }
        },
        colors: ["#1A56DB", "#FDBA8C"],
        series: [{
                name: "Batch 1",
                color: "#7A75B4",
            },
            {
                name: "Batch 2",
                color: "#0cad62",
            },
            {
                name: "Batch 3",
                color: "#ebe242",
            },
        ],
        chart: {
            type: "bar",
            height: '400px',
            width: '100%',
            fontFamily: "Inter, sans-serif",
            toolbar: {
                show: false,
            },
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: "70%",
                borderRadiusApplication: "end",
                borderRadius: 4,

            },
        },
        tooltip: {
            shared: true,
            intersect: false,
            style: {
                fontFamily: "Poppins",
            },
        },
        states: {
            hover: {
                filter: {
                    type: "darken",
                    value: 1,
                },
            },
        },
        stroke: {
            show: true,
            width: 1,
            colors: ["#7A75B4"],
        },
        grid: {
            row: {
                colors: ['#4fe377', '#91edaa'],
                opacity: 0.6
            },
            column: {
                colors: ['white', 'transparent'],
            },
            xaxis: {
                lines: {
                    show: true
                }
            },
            show: true,
            borderColor: '#000000',
            strokeDashArray: 6,
            padding: {
                left: 2,
                right: 2,
                top: -14
            },
        },
        dataLabels: {
            enabled: false,
        },
        legend: {
            show: true,
            fontFamily: 'Poppins',
            fontSize: '16px',
        },
        xaxis: {
            floating: false,
            labels: {
                show: true,
                style: {
                    fontFamily: "Poppins",
                    cssClass: 'text-base font-semibold fill-gray-500 dark:fill-gray-400'
                }
            },
            axisBorder: {
                show: true,
            },
            axisTicks: {
                show: false,
            },
        },
        yaxis: {
            show: true,
        },
        responsive: [{
            breakpoint: 600,
            options: {
                chart: {
                    height: 'auto',
                },
                legend: {
                    fontSize: '14px',
                },
            }
        }],
    }
    if (document.getElementById("area-chart") && typeof ApexCharts !== 'undefined') {
        getChartData(); // render chart
    }
</script>
