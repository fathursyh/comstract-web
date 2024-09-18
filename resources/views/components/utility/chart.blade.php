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
                color: "#00A858",
            },
            {
                name: "Batch 3",
                color: "#ebe242",
            },
        ],
        chart: {
            type: "bar",
            height: '440px',
            width: '100%',
            fontFamily: "Inter, sans-serif",
            toolbar: {
                show: false,
            },
        },
        responsive: [
          {
            breakpoint: 600,
            options: {
                chart: {
                    height: 'auto',
                },
            }
          }
        ],
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
                colors: ['#fcd9df', '#ffc7d0'],
                opacity: 1
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
        },
        xaxis: {
            floating: false,
            labels: {
                show: true,
                style: {
                    fontFamily: "Inter, sans-serif",
                    cssClass: 'text-base font-bold fill-gray-500 dark:fill-gray-400'
                }
            },
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
        },
        yaxis: {
            show: false,
        },
        fill: {
            opacity: 1,
        },
    }
    if (document.getElementById("area-chart") && typeof ApexCharts !== 'undefined') {
        getChartData(); // render chart
    }
</script>
