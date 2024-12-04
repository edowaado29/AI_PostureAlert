import ApexCharts from "apexcharts";
import { color } from "chart.js/helpers";

// Data PostureStatus
var postureData = @json($perBulanPostureCount); // Data dari controller
var postureLabels = Object.keys(postureData);  // Bulan
var postureCounts = Object.values(postureData);  // Jumlah data per bulan

var optionsPosture = {
    series: [{
        name: "BAD POSTURE",
        data: postureCounts, // Data untuk 12 bulan
    }],
    chart: {
        height: 350,
        type: "area",
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
    colors: ["#FBB13C"],
    dataLabels: {
        enabled: true,
    },
    stroke: {
        curve: "smooth",
    },
    title: {
        text: "BAD POSTURE",
        align: "right",
    },
    grid: {
        borderColor: "#e7e7e7",
        row: {
            colors: ["#f3f3f3", "transparent"], // Row color alternates
            opacity: 0.5,
        },
    },
    markers: {
        size: 1,
    },
    xaxis: {
        categories: postureLabels, // Bulan
    },
    legend: {
        position: "top",
        horizontalAlign: "right",
        floating: true,
        offsetY: -25,
        offsetX: -5,
    },
};

var chartPosture = new ApexCharts(
    document.querySelector("#chartLinePosture"),
    optionsPosture
);
chartPosture.render();

// Data DistanceStatus
var distanceData = @json($perBulanDistanceCount); // Data dari controller
var distanceLabels = Object.keys(distanceData);  // Bulan
var distanceCounts = Object.values(distanceData);  // Jumlah data per bulan

var optionsDistance = {
    series: [{
        name: "BAD DISTANCE",
        data: distanceCounts, // Data untuk 12 bulan
    }],
    chart: {
        height: 350,
        type: "area",
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
    colors: ["#73D2DE"],
    dataLabels: {
        enabled: true,
    },
    stroke: {
        curve: "smooth",
    },
    title: {
        text: "BAD DISTANCE",
        align: "right",
    },
    grid: {
        borderColor: "#e7e7e7",
        row: {
            colors: ["#f3f3f3", "transparent"], // Row color alternates
            opacity: 0.5,
        },
    },
    markers: {
        size: 1,
    },
    xaxis: {
        categories: distanceLabels, // Bulan
    },
    legend: {
        position: "top",
        horizontalAlign: "right",
        floating: true,
        offsetY: -25,
        offsetX: -5,
    },
};

var chartDistance = new ApexCharts(
    document.querySelector("#chartLineDistance"),
    optionsDistance
);
chartDistance.render();
