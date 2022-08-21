/*=========================================================================================
    File Name: form-file-uploader.js
    Description: dropzone
    --------------------------------------------------------------------------------------
    Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

Dropzone.autoDiscover = false;

$(function () {
  'use strict';

  var singleFile = $('#dpz-single-file');

  // Basic example
  singleFile.dropzone({
    paramName: 'file', // The name that will be used to transfer the file
    maxFiles: 1,
    acceptedFiles: 'image/*',
  });
});
