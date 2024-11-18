import ApexCharts from "apexcharts";

var options = {
    series: [
        {
            name: "High - 2013",
            data: [28, 29, 33, 36, 32, 32, 33],
        },
        {
            name: "Low - 2013",
            data: [12, 11, 14, 18, 17, 13, 13],
        },
    ],
    chart: {
        height: 350,
        type: "line",
        dropShadow: {
            enabled: true,
            color: "#000",
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2,
        },
        zoom: {
            enabled: false,
        },
        toolbar: {
            show: false,
        },
    },
    colors: ["#77B6EA", "#545454"],
    dataLabels: {
        enabled: true,
    },
    stroke: {
        curve: "smooth",
    },
    title: {
        text: "Average High & Low Temperature",
        align: "left",
    },
    grid: {
        borderColor: "#e7e7e7",
        row: {
            colors: ["#f3f3f3", "transparent"], // takes an array which will be repeated on columns
            opacity: 0.5,
        },
    },
    markers: {
        size: 1,
    },
    xaxis: {
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
        title: {
            text: "Month",
        },
    },
    yaxis: {
        title: {
            text: "Temperature",
        },
        min: 5,
        max: 40,
    },
    legend: {
        position: "top",
        horizontalAlign: "right",
        floating: true,
        offsetY: -25,
        offsetX: -5,
    },
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();

var series = {
    monthDataSeries1: {
        prices: [
            8107.85, 8128.0, 8122.9, 8165.5, 8340.7, 8423.7, 8423.5, 8514.3,
            8481.85, 8487.7, 8506.9, 8626.2,
        ],
        dates: [
            "2023-10-01",
            "2023-10-02",
            "2023-10-03",
            "2023-10-04",
            "2023-10-05",
            "2023-10-06",
            "2023-10-09",
            "2023-10-10",
            "2023-10-11",
            "2023-10-12",
            "2023-10-13",
            "2023-10-14",
        ],
    },
};

var options = {
    series: [
        {
            name: "STOCK ABC",
            data: series.monthDataSeries1.prices,
        },
    ],
    chart: {
        type: "area",
        height: 350,
        zoom: {
            enabled: false,
        },
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        curve: "straight",
    },

    title: {
        text: "Fundamental Analysis of Stocks",
        align: "left",
    },
    subtitle: {
        text: "Price Movements",
        align: "left",
    },
    labels: series.monthDataSeries1.dates,
    xaxis: {
        type: "datetime",
    },
    yaxis: {
        opposite: true,
    },
    legend: {
        horizontalAlign: "left",
    },
};

var chart = new ApexCharts(document.querySelector("#chartArea"), options);
chart.render();

// Konfigurasi Chart
var options = {
    series: [
        {
            name: "Net Profit",
            data: [44, 55, 57, 56, 61, 58, 63, 60, 66],
        },
        {
            name: "Revenue",
            data: [76, 85, 101, 98, 87, 105, 91, 114, 94],
        },
        {
            name: "Free Cash Flow",
            data: [35, 41, 36, 26, 45, 48, 52, 53, 41],
        },
    ],
    chart: {
        type: "bar",
        height: 350,
    },
    plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: "55%",
            endingShape: "rounded",
        },
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        show: true,
        width: 2,
        colors: ["transparent"],
    },
    xaxis: {
        categories: [
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
        ],
    },
    yaxis: {
        title: {
            text: "$ (thousands)",
        },
    },
    fill: {
        opacity: 1,
    },
    tooltip: {
        y: {
            formatter: function (val) {
                return "$ " + val + " thousands";
            },
        },
    },
};

// Render Chart
var chart = new ApexCharts(document.querySelector("#chartColum"), options);
chart.render();
