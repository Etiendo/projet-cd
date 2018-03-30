/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/build/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./web/assets/js/app.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./web/assets/css/app.scss":
/*!*********************************!*\
  !*** ./web/assets/css/app.scss ***!
  \*********************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./web/assets/js/app.js":
/*!******************************!*\
  !*** ./web/assets/js/app.js ***!
  \******************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! ../css/app.scss */ "./web/assets/css/app.scss");

mapboxgl.accessToken = 'pk.eyJ1IjoiZXRpZW5kbyIsImEiOiJjamNhbTY4NDgwOXoxMnptdXIyb2ZvZ2k5In0.zCS4uLuoY-v6bfnDzaEoww';

var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/etiendo/cjcanntla0vsp2st9m3af6liq',
    center: [2.33, 48.86],
    zoom: 11
});

map.addControl(new mapboxgl.NavigationControl());

var req = new XMLHttpRequest();

req.open("GET", "http://localhost:8888/projet-cd/projet_cd_v1_natif/controller/poi_map.php", false);

req.send(null);

var data = JSON.parse(req.responseText);

var geojson = {
    type: 'FeatureCollection',
    features: data // données récupérées de la BDD via la requête http
};

geojson.features.forEach(function (marker) {

    var el = document.createElement('div');
    el.className = 'marker';

    new mapboxgl.Marker(el).setLngLat(marker.properties.geometry.coordinates).setPopup(new mapboxgl.Popup({
        offset: 25
    }).setHTML('<h3>' + marker.properties.title + '</h3><p>' + marker.properties.content + '</p>')).addTo(map);
});

/***/ })

/******/ });
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAgNWQ5YzYxODVkOGE5NzFiNmI3NTUiLCJ3ZWJwYWNrOi8vLy4vd2ViL2Fzc2V0cy9jc3MvYXBwLnNjc3M/MjY0NSIsIndlYnBhY2s6Ly8vLi93ZWIvYXNzZXRzL2pzL2FwcC5qcyJdLCJuYW1lcyI6WyJyZXF1aXJlIiwibWFwYm94Z2wiLCJhY2Nlc3NUb2tlbiIsIm1hcCIsIk1hcCIsImNvbnRhaW5lciIsInN0eWxlIiwiY2VudGVyIiwiem9vbSIsImFkZENvbnRyb2wiLCJOYXZpZ2F0aW9uQ29udHJvbCIsInJlcSIsIlhNTEh0dHBSZXF1ZXN0Iiwib3BlbiIsInNlbmQiLCJkYXRhIiwiSlNPTiIsInBhcnNlIiwicmVzcG9uc2VUZXh0IiwiZ2VvanNvbiIsInR5cGUiLCJmZWF0dXJlcyIsImZvckVhY2giLCJtYXJrZXIiLCJlbCIsImRvY3VtZW50IiwiY3JlYXRlRWxlbWVudCIsImNsYXNzTmFtZSIsIk1hcmtlciIsInNldExuZ0xhdCIsInByb3BlcnRpZXMiLCJnZW9tZXRyeSIsImNvb3JkaW5hdGVzIiwic2V0UG9wdXAiLCJQb3B1cCIsIm9mZnNldCIsInNldEhUTUwiLCJ0aXRsZSIsImNvbnRlbnQiLCJhZGRUbyJdLCJtYXBwaW5ncyI6IjtBQUFBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOzs7QUFHQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxhQUFLO0FBQ0w7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQSxtQ0FBMkIsMEJBQTBCLEVBQUU7QUFDdkQseUNBQWlDLGVBQWU7QUFDaEQ7QUFDQTtBQUNBOztBQUVBO0FBQ0EsOERBQXNELCtEQUErRDs7QUFFckg7QUFDQTs7QUFFQTtBQUNBOzs7Ozs7Ozs7Ozs7O0FDN0RBLHlDOzs7Ozs7Ozs7Ozs7QUNBQSxtQkFBQUEsQ0FBUSxrREFBUjs7QUFFQUMsU0FBU0MsV0FBVCxHQUF1QiwyRkFBdkI7O0FBRUEsSUFBSUMsTUFBTSxJQUFJRixTQUFTRyxHQUFiLENBQWlCO0FBQ3ZCQyxlQUFXLEtBRFk7QUFFdkJDLFdBQU8sbURBRmdCO0FBR3ZCQyxZQUFRLENBQUMsSUFBRCxFQUFPLEtBQVAsQ0FIZTtBQUl2QkMsVUFBTTtBQUppQixDQUFqQixDQUFWOztBQU9BTCxJQUFJTSxVQUFKLENBQWUsSUFBSVIsU0FBU1MsaUJBQWIsRUFBZjs7QUFFQSxJQUFJQyxNQUFNLElBQUlDLGNBQUosRUFBVjs7QUFFQUQsSUFBSUUsSUFBSixDQUFTLEtBQVQsRUFBZ0IsMkVBQWhCLEVBQTZGLEtBQTdGOztBQUVBRixJQUFJRyxJQUFKLENBQVMsSUFBVDs7QUFFQSxJQUFJQyxPQUFPQyxLQUFLQyxLQUFMLENBQVdOLElBQUlPLFlBQWYsQ0FBWDs7QUFFQSxJQUFJQyxVQUFVO0FBQ1ZDLFVBQU0sbUJBREk7QUFFVkMsY0FBVU4sSUFGQSxDQUVLO0FBRkwsQ0FBZDs7QUFLQUksUUFBUUUsUUFBUixDQUFpQkMsT0FBakIsQ0FBeUIsVUFBVUMsTUFBVixFQUFrQjs7QUFFdkMsUUFBSUMsS0FBS0MsU0FBU0MsYUFBVCxDQUF1QixLQUF2QixDQUFUO0FBQ0FGLE9BQUdHLFNBQUgsR0FBZSxRQUFmOztBQUVBLFFBQUkxQixTQUFTMkIsTUFBYixDQUFvQkosRUFBcEIsRUFBd0JLLFNBQXhCLENBQWtDTixPQUFPTyxVQUFQLENBQWtCQyxRQUFsQixDQUEyQkMsV0FBN0QsRUFBMEVDLFFBQTFFLENBQW1GLElBQUloQyxTQUFTaUMsS0FBYixDQUFtQjtBQUNsR0MsZ0JBQVE7QUFEMEYsS0FBbkIsRUFFaEZDLE9BRmdGLENBRXhFLFNBQVNiLE9BQU9PLFVBQVAsQ0FBa0JPLEtBQTNCLEdBQW1DLFVBQW5DLEdBQWdEZCxPQUFPTyxVQUFQLENBQWtCUSxPQUFsRSxHQUE0RSxNQUZKLENBQW5GLEVBRWdHQyxLQUZoRyxDQUVzR3BDLEdBRnRHO0FBR0gsQ0FSRCxFIiwiZmlsZSI6IndlYi5qcyIsInNvdXJjZXNDb250ZW50IjpbIiBcdC8vIFRoZSBtb2R1bGUgY2FjaGVcbiBcdHZhciBpbnN0YWxsZWRNb2R1bGVzID0ge307XG5cbiBcdC8vIFRoZSByZXF1aXJlIGZ1bmN0aW9uXG4gXHRmdW5jdGlvbiBfX3dlYnBhY2tfcmVxdWlyZV9fKG1vZHVsZUlkKSB7XG5cbiBcdFx0Ly8gQ2hlY2sgaWYgbW9kdWxlIGlzIGluIGNhY2hlXG4gXHRcdGlmKGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdKSB7XG4gXHRcdFx0cmV0dXJuIGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdLmV4cG9ydHM7XG4gXHRcdH1cbiBcdFx0Ly8gQ3JlYXRlIGEgbmV3IG1vZHVsZSAoYW5kIHB1dCBpdCBpbnRvIHRoZSBjYWNoZSlcbiBcdFx0dmFyIG1vZHVsZSA9IGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdID0ge1xuIFx0XHRcdGk6IG1vZHVsZUlkLFxuIFx0XHRcdGw6IGZhbHNlLFxuIFx0XHRcdGV4cG9ydHM6IHt9XG4gXHRcdH07XG5cbiBcdFx0Ly8gRXhlY3V0ZSB0aGUgbW9kdWxlIGZ1bmN0aW9uXG4gXHRcdG1vZHVsZXNbbW9kdWxlSWRdLmNhbGwobW9kdWxlLmV4cG9ydHMsIG1vZHVsZSwgbW9kdWxlLmV4cG9ydHMsIF9fd2VicGFja19yZXF1aXJlX18pO1xuXG4gXHRcdC8vIEZsYWcgdGhlIG1vZHVsZSBhcyBsb2FkZWRcbiBcdFx0bW9kdWxlLmwgPSB0cnVlO1xuXG4gXHRcdC8vIFJldHVybiB0aGUgZXhwb3J0cyBvZiB0aGUgbW9kdWxlXG4gXHRcdHJldHVybiBtb2R1bGUuZXhwb3J0cztcbiBcdH1cblxuXG4gXHQvLyBleHBvc2UgdGhlIG1vZHVsZXMgb2JqZWN0IChfX3dlYnBhY2tfbW9kdWxlc19fKVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5tID0gbW9kdWxlcztcblxuIFx0Ly8gZXhwb3NlIHRoZSBtb2R1bGUgY2FjaGVcbiBcdF9fd2VicGFja19yZXF1aXJlX18uYyA9IGluc3RhbGxlZE1vZHVsZXM7XG5cbiBcdC8vIGRlZmluZSBnZXR0ZXIgZnVuY3Rpb24gZm9yIGhhcm1vbnkgZXhwb3J0c1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5kID0gZnVuY3Rpb24oZXhwb3J0cywgbmFtZSwgZ2V0dGVyKSB7XG4gXHRcdGlmKCFfX3dlYnBhY2tfcmVxdWlyZV9fLm8oZXhwb3J0cywgbmFtZSkpIHtcbiBcdFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkoZXhwb3J0cywgbmFtZSwge1xuIFx0XHRcdFx0Y29uZmlndXJhYmxlOiBmYWxzZSxcbiBcdFx0XHRcdGVudW1lcmFibGU6IHRydWUsXG4gXHRcdFx0XHRnZXQ6IGdldHRlclxuIFx0XHRcdH0pO1xuIFx0XHR9XG4gXHR9O1xuXG4gXHQvLyBnZXREZWZhdWx0RXhwb3J0IGZ1bmN0aW9uIGZvciBjb21wYXRpYmlsaXR5IHdpdGggbm9uLWhhcm1vbnkgbW9kdWxlc1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5uID0gZnVuY3Rpb24obW9kdWxlKSB7XG4gXHRcdHZhciBnZXR0ZXIgPSBtb2R1bGUgJiYgbW9kdWxlLl9fZXNNb2R1bGUgP1xuIFx0XHRcdGZ1bmN0aW9uIGdldERlZmF1bHQoKSB7IHJldHVybiBtb2R1bGVbJ2RlZmF1bHQnXTsgfSA6XG4gXHRcdFx0ZnVuY3Rpb24gZ2V0TW9kdWxlRXhwb3J0cygpIHsgcmV0dXJuIG1vZHVsZTsgfTtcbiBcdFx0X193ZWJwYWNrX3JlcXVpcmVfXy5kKGdldHRlciwgJ2EnLCBnZXR0ZXIpO1xuIFx0XHRyZXR1cm4gZ2V0dGVyO1xuIFx0fTtcblxuIFx0Ly8gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm8gPSBmdW5jdGlvbihvYmplY3QsIHByb3BlcnR5KSB7IHJldHVybiBPYmplY3QucHJvdG90eXBlLmhhc093blByb3BlcnR5LmNhbGwob2JqZWN0LCBwcm9wZXJ0eSk7IH07XG5cbiBcdC8vIF9fd2VicGFja19wdWJsaWNfcGF0aF9fXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLnAgPSBcIi9idWlsZC9cIjtcblxuIFx0Ly8gTG9hZCBlbnRyeSBtb2R1bGUgYW5kIHJldHVybiBleHBvcnRzXG4gXHRyZXR1cm4gX193ZWJwYWNrX3JlcXVpcmVfXyhfX3dlYnBhY2tfcmVxdWlyZV9fLnMgPSBcIi4vd2ViL2Fzc2V0cy9qcy9hcHAuanNcIik7XG5cblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gd2VicGFjay9ib290c3RyYXAgNWQ5YzYxODVkOGE5NzFiNmI3NTUiLCIvLyByZW1vdmVkIGJ5IGV4dHJhY3QtdGV4dC13ZWJwYWNrLXBsdWdpblxuXG5cbi8vLy8vLy8vLy8vLy8vLy8vL1xuLy8gV0VCUEFDSyBGT09URVJcbi8vIC4vd2ViL2Fzc2V0cy9jc3MvYXBwLnNjc3Ncbi8vIG1vZHVsZSBpZCA9IC4vd2ViL2Fzc2V0cy9jc3MvYXBwLnNjc3Ncbi8vIG1vZHVsZSBjaHVua3MgPSAwIiwicmVxdWlyZSgnLi4vY3NzL2FwcC5zY3NzJyk7XG5cbm1hcGJveGdsLmFjY2Vzc1Rva2VuID0gJ3BrLmV5SjFJam9pWlhScFpXNWtieUlzSW1FaU9pSmphbU5oYlRZNE5EZ3dPWG94TW5wdGRYSXliMlp2WjJrNUluMC56Q1M0dUx1b1ktdjZiZm5EemFFb3d3JztcblxudmFyIG1hcCA9IG5ldyBtYXBib3hnbC5NYXAoe1xuICAgIGNvbnRhaW5lcjogJ21hcCcsXG4gICAgc3R5bGU6ICdtYXBib3g6Ly9zdHlsZXMvZXRpZW5kby9jamNhbm50bGEwdnNwMnN0OW0zYWY2bGlxJyxcbiAgICBjZW50ZXI6IFsyLjMzLCA0OC44Nl0sXG4gICAgem9vbTogMTEsXG59KTtcblxubWFwLmFkZENvbnRyb2wobmV3IG1hcGJveGdsLk5hdmlnYXRpb25Db250cm9sKCkpO1xuXG52YXIgcmVxID0gbmV3IFhNTEh0dHBSZXF1ZXN0KCk7XG5cbnJlcS5vcGVuKFwiR0VUXCIsIFwiaHR0cDovL2xvY2FsaG9zdDo4ODg4L3Byb2pldC1jZC9wcm9qZXRfY2RfdjFfbmF0aWYvY29udHJvbGxlci9wb2lfbWFwLnBocFwiLCBmYWxzZSk7XG5cbnJlcS5zZW5kKG51bGwpO1xuXG52YXIgZGF0YSA9IEpTT04ucGFyc2UocmVxLnJlc3BvbnNlVGV4dCk7XG5cbnZhciBnZW9qc29uID0ge1xuICAgIHR5cGU6ICdGZWF0dXJlQ29sbGVjdGlvbicsXG4gICAgZmVhdHVyZXM6IGRhdGEgLy8gZG9ubsOpZXMgcsOpY3Vww6lyw6llcyBkZSBsYSBCREQgdmlhIGxhIHJlcXXDqnRlIGh0dHBcbn07XG5cbmdlb2pzb24uZmVhdHVyZXMuZm9yRWFjaChmdW5jdGlvbiAobWFya2VyKSB7XG5cbiAgICB2YXIgZWwgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdkaXYnKTtcbiAgICBlbC5jbGFzc05hbWUgPSAnbWFya2VyJztcblxuICAgIG5ldyBtYXBib3hnbC5NYXJrZXIoZWwpLnNldExuZ0xhdChtYXJrZXIucHJvcGVydGllcy5nZW9tZXRyeS5jb29yZGluYXRlcykuc2V0UG9wdXAobmV3IG1hcGJveGdsLlBvcHVwKHtcbiAgICAgICAgb2Zmc2V0OiAyNVxuICAgIH0pLnNldEhUTUwoJzxoMz4nICsgbWFya2VyLnByb3BlcnRpZXMudGl0bGUgKyAnPC9oMz48cD4nICsgbWFya2VyLnByb3BlcnRpZXMuY29udGVudCArICc8L3A+JykpLmFkZFRvKG1hcClcbn0pO1xuXG5cbi8vIFdFQlBBQ0sgRk9PVEVSIC8vXG4vLyAuL3dlYi9hc3NldHMvanMvYXBwLmpzIl0sInNvdXJjZVJvb3QiOiIifQ==