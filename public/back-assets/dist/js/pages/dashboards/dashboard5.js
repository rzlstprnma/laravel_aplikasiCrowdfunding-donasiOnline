/*
Template Name: Ample Admin
Author: Wrappixel
Email: niravjoshi87@gmail.com
File: js
*/
$(function () {
    "use strict";

    // ==============================================================
    // Ct Barchart
    // ==============================================================
    new Chartist.Bar(
        '#weeksales-bar',
        {
          labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
          series: [[50, 40, 30, 70, 50, 20, 30]]
        },
        {
          axisX: {
            showLabel: false,
            showGrid: false
          },

          chartPadding: {
            top: 15,
            left: -25
          },
          axisX: {
            showLabel: true,
            showGrid: false
          },
          axisY: {
            showLabel: false,
            showGrid: false
          },
          fullWidth: true,
          plugins: [Chartist.plugins.tooltip()]
        }
    );
    
    // ========================================================================
    // Sales Charts
    // ========================================================================

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Jan",
            value: 15,
    }, {
            label: "Feb",
            value: 15,
    }, {
            label: "Mar",
            value: 35,
    }, {
            label: "Apr",
            value: 105
        }],
        resize: true,
        colors: ['#ff7676', '#2cabe3', '#53e69d', '#7bcef3']
    });

    // ========================================================================
    // ct-bar-chart Charts
    // ========================================================================
    var sparklineLogin = function() {
        $('#ravenue').sparkline([10, 11, 10, 11, 8, 10, 12], {
            type: 'bar',
            height: '55',
            barWidth: '8',
            width: '100%',
            resize: true,
            barSpacing: '8',
            barColor: '#2cabe3'
        });
        $('#weekday').sparkline([10, 11, 10, 11, 8, 10, 12, 15, 12, 10], {
            type: 'bar',
            height: '275',
            barWidth: '12',
            width: '100%',
            resize: true,
            barSpacing: '12',
            barColor: '#2cabe3'
        });
    };
    var sparkResize;

    $(window).resize(function(e) {
        clearTimeout(sparkResize);
        sparkResize = setTimeout(sparklineLogin, 500);
    });
    sparklineLogin();

    // ========================================================================
    // Guage Chart
    // ========================================================================
    var opts = {
        angle: 0, // The span of the gauge arc
        lineWidth: 0.2, // The line thickness
        radiusScale: 0.7, // Relative radius
        pointer: {
            length: 0.64, // // Relative to gauge radius
            strokeWidth: 0.04, // The thickness
            color: '#000000' // Fill color
        },
        limitMax: false, // If false, the max value of the gauge will be updated if value surpass max
        limitMin: false, // If true, the min value of the gauge will be fixed unless you set it manually
        colorStart: '#53e69d', // Colors
        colorStop: '#53e69d', // just experiment with them
        strokeColor: '#E0E0E0', // to see which ones work best for you
        generateGradient: true,
        highDpiSupport: true // High resolution support
    };
    var target = document.getElementById('foo'); // your canvas element
    var gauge = new Gauge(target).setOptions(opts); // create sexy gauge!
    gauge.maxValue = 3000; // set max gauge value
    gauge.setMinValue(0); // Prefer setter over gauge.minValue = 0
    gauge.animationSpeed = 45; // set animation speed (32 is default value)
    gauge.set(1850); // set actual value

    // ========================================================================
    // ct-main-balance-chart Charts
    // ========================================================================
    var chart = new Chartist.Line('#ct-main-bal', {
        labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9'],
        series: [
    [1, 2, 5, 3, 4, 2.5, 5, 3, 1],
    [1, 4, 2, 5, 2, 5.5, 3, 4, 1]
   ]

    }, {
        showArea: true,
        showPoint: true,
        height: 100,
        chartPadding: {
            left: -20,
            top: 10,
        },
        axisX: {
            showLabel: false,
            showGrid: false
        },
        axisY: {
            showLabel: false,
            showGrid: false
        },
        fullWidth: true,
        plugins: [
            Chartist.plugins.tooltip()
        ]
    });

    // ========================================================================
    // monthly sales Charts
    // ========================================================================
    var chart = new Chartist.Line('#ct-extra', {
        labels: ['1', '2', '3', '4', '5', '6'],
        series: [[1, -2, 5, 3, 0, 2.5]  ]
    }, {
        showArea: true,
        showPoint: true,
        height: '100px',
        
        chartPadding: {
            left: -20,
            top: 10,
        },
        axisX: {
            showLabel: false,
            showGrid: true
        },
        axisY: {
            showLabel: false,
            showGrid: false
        },
        fullWidth: true,
        plugins: [
            Chartist.plugins.tooltip()
        ]
    });

    // ========================================================================
    // PRODUCTS YEARLY SALES Charts
    // ========================================================================

    new Chartist.Line('#ct-visits', {
         labels: ['2008', '2009', '2010', '2011', '2012', '2013', '2014', '2015'],
         series: [
            [5, 2, 7, 4, 5, 3, 5, 4],
            [2, 5, 2, 6, 2, 5, 2, 4]
          ]
     }, {
        chartPadding: {
            top: 40,
            bottom: 20,
            left: 0,
            right: 0,
         },
         low: 1,
         showPoint: true,

         fullWidth: true,
         plugins: [
            Chartist.plugins.tooltip()
          ],
         axisY: {
             labelInterpolationFnc: function (value) {
                 return (value / 1) + 'k';
             }
         },
         showArea: true
     });
    
});