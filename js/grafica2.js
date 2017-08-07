/**
 * Define trend lines
 */
var icon = "M6.684,25.682L24.316,15.5L6.684,5.318V25.682z";
var trendLines = [{
  "initialValue": 1625,
  "initialCategory": 1997,
  "lineColor": "#050",
  "lineThickness": 1,
  "dashLength": 5,
  "initialImage": {
    "svgPath": icon,
    "color": "#050",
    "width": 13,
    "height": 13,
    "rotation": 90,
    "offsetX": 4,
    "offsetY": -17
  },
  "finalValue": 0,
  "finalCategory": 1997
}, {
  "initialValue": 1270,
  "initialCategory": 2002,
  "lineColor": "#555",
  "lineThickness": 1,
  "dashLength": 5,
  "initialImage": {
    "svgPath": icon,
    "color": "#555",
    "width": 13,
    "height": 13,
    "rotation": 90,
    "offsetX": 4,
    "offsetY": -17
  },
  "finalValue": 0,
  "finalCategory": 2002
}];

/**
 * Define chart data
 */
var chartData = [{
  "year": 1994,
  "value": 1587
}, {
  "year": 1995,
  "value": 1567
}, {
  "year": 1996,
  "value": 1617
}, {
  "year": 1997,
  "value": 1630,
  "label": "Announcement",
  "labelColor": "#050",
  "fillColor": "#050"
}, {
  "year": 1998,
  "value": 1660
}, {
  "year": 1999,
  "value": 1683
}, {
  "year": 2000,
  "value": 1691
}, {
  "year": 2001,
  "value": 1298
}, {
  "year": 2002,
  "value": 1275,
  "label": "Now",
  "fillColor": "#555"
}, {
  "year": 2003,
  "value": 1246
}, {
  "year": 2004,
  "value": 1318
}, {
  "year": 2005,
  "value": 1213
}, {
  "year": 2006,
  "value": 1199
}, {
  "year": 2007,
  "value": 1110
}, {
  "year": 2008,
  "value": 1165
}, {
  "year": 2009,
  "value": 1145
}, {
  "year": 2010,
  "value": 1163
}, {
  "year": 2011,
  "value": 1180
}, {
  "year": 2012,
  "value": 1159
}];
var lugar = getElementById("divuno");

var chart = AmCharts.makeChart(lugar, {
  "type": "serial",
  "theme": "light",
  "dataProvider": chartData,
  "trendLines": trendLines,
  "valueAxes": [{
    "gridAlpha": 0.07,
    "position": "left",
    "title": "Unit failure volume"
  }],
  "graphs": [{
    "title": "value",
    "type": "smoothedLine",
    "valueField": "value",
    "labelColorField": "labelColor",
    "fillColorsField": "fillColor",
    "lineThickness": 3,
    "fillAlphas": 0.3,
    "labelText": "[[label]]",
    "labelOffset": 20,
    "fontSize": 15
  }],
  "categoryField": "year",
  "categoryAxis": {
    "startOnAxis": true
  }
});