<script>
  const getChartData = () => {
      const url = '<?= Request::url() ?>/getChartData';
      fetch(url, {
        method: 'GET',
      }).then((res)=>{
        return res.json();
      }).then((data)=>{
        for(let i = 0; i < 3; i++) {
          options.series[i].data = data[i];
        }
        const chart = new ApexCharts(document.getElementById("area-chart"), options);
        chart.render();
      })
    };
  
    const options = {
    colors: ["#1A56DB", "#FDBA8C"],
    series: [
      {
        name: "Batch 1",
        color: "#7A75B4",
        data: []
      },
      {
        name: "Batch 2",
        color: "#00A858",
        data: []
      },
      {
        name: "Batch 3",
        color: "#ebe242",
        data: [],
      },
    ],
    chart: {
      type: "bar",
      height: "320px",
      width: '100%',
      fontFamily: "Inter, sans-serif",
      toolbar: {
        show: true,
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
        colors: ['#e5e5e5', 'transparent'],
        opacity: 0.5
    }, 
    column: {
        colors: ['#f8f8f8', 'transparent'],
    }, 
    xaxis: {
      lines: {
        show: true
      }
    },
      show: true,
      borderColor: '#111',
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
  
  