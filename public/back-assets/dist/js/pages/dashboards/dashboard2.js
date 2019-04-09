/*
Template Name: Ample Admin
Author: Wrappixel
Email: niravjoshi87@gmail.com
File: js
*/
$(function () {
    "use strict";

    // ========================================================================
    // Expance Charts
    // ========================================================================
    var data = [],
        totalPoints = 300;

    function getRandomData() {
        if (data.length > 0) data = data.slice(1);
        // Do a random walk
        while (data.length < totalPoints) {
            var prev = data.length > 0 ? data[data.length - 1] : 50,
                y = prev + Math.random() * 10 - 5;
            if (y < 0) {
                y = 0;
            } else if (y > 100) {
                y = 100;
            }
            data.push(y);
        }
        // Zip the generated y values with the x values 
        var res = [];
        for (var i = 0; i < data.length; ++i) {
            res.push([i, data[i]])
        }
        return res;
    }

    var updateInterval = 30;
    $("#updateInterval").val(updateInterval).change(function () {
        var v = $(this).val();
        if (v && !isNaN(+v)) {
            updateInterval = +v;
            if (updateInterval < 1) {
                updateInterval = 1;
            } else if (updateInterval > 3000) {
                updateInterval = 3000;
            }
            $(this).val("" + updateInterval);
        }
    });

    var plot = $.plot("#placeholder", [getRandomData()], {
        series: {
            shadowSize: 0 // Drawing is faster without shadows
        },
        yaxis: {
            min: 0,
            max: 100
        },
        xaxis: {
            show: false
        },
        colors: ["#fff"],
        grid: {
            color: "rgba(255, 255, 255, 0.0)",
            hoverable: true,
            borderWidth: 0
        },
        tooltip: true,
        tooltipOpts: {
            content: "Y: %y",
            defaultTheme: false
        }
    });

    function update() {
        plot.setData([getRandomData()]);
        // Since the axes don't change, we don't need to call plot.setupGrid()
        plot.draw();
        setTimeout(update, updateInterval);
    }

    $(window).resize(function () {
        $.plot($('#placeholder'), [getRandomData()]);
    });

    update();

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
    
});