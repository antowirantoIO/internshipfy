/**
 * DataTables Basic
 */

$(function () {
  'use strict';

  var dt_basic_table = $('.datatables-basic'),
    dt_date_table = $('.dt-date'),
    assetPath = '../../../app-assets/';

  if ($('body').attr('data-framework') === 'laravel') {
    assetPath = $('body').attr('data-asset-path');
  }

  // DataTable with buttons
  // --------------------------------------------------------------------

  if (dt_basic_table.length) {
    var dt_basic = dt_basic_table.DataTable({
      ajax: assetPath + 'activity/data',
      scrollX: true,
      columns: [
        { data: 'id' },
        { data: 'id' }, // used for sorting so will hide this column
        { data: 'activity' },
        { data: 'created_at' },
        { data: 'start_time' },
        { data: 'notes' },
        { data: '' },
        { data: '' }
      ],
      columnDefs: [
        {
            targets: 0,
            visible: false,
        },
        {
          targets: 1,
          visible: false,
        },
        {
          // Avatar image/badge, Name and post
          targets: 2,
          render: function (data, type, full, meta) {
            var $activity = full['activity'],
                $division = full['division'];
            var $row_output =
              '<div class="d-flex justify-content-left align-items-center">' +
              '<div class="d-flex flex-column">' +
              '<span class="emp_name text-truncate fw-bold">' +
              $activity +
              '</span>' +
              '<small class="emp_post text-truncate text-muted">' +
              $division +
              '</small>' +
              '</div>' +
              '</div>';
            return $row_output;
          }
        },
        {
            // Date
            targets: 3,
            render: function (data, type, full, meta) {
                var date = full['date'];
                var $row_output =
                    '<div class="d-flex justify-content-left align-items-center">' +
                    '<div class="d-flex flex-column">' +
                    '<span class="emp_name text-truncate fw-bold">' +
                    date +
                    '</span>' +
                    '</div>' +
                    '</div>';
                return $row_output;
            }
        },
        {
            // Date and time
            targets: 4,
            render: function (data, type, full, meta) {
                var $start_time = full['start_time'],
                    $end_time = full['end_time'];
                var $row_output =
                    '<div class="d-flex justify-content-left align-items-center">' +
                    '<div class="d-flex flex-column">' +
                    '<span class="emp_name text-truncate fw-bold">' +
                    $start_time + ' - ' + $end_time +
                    '</span>' +
                    '</div>' +
                    '</div>';
                return $row_output;
            }
        },
        {
            // Notes
            targets: 5,
            render: function (data, type, full, meta) {
                var $notes = full['notes'];
                var $row_output =
                    $notes != null ? '<div class="d-flex justify-content-left align-items-center">' +
                    '<div class="d-flex flex-column">' +
                    '<span class="emp_name text-truncate fw-bold">' +
                    $notes +
                    '</span>' +
                    '</div>' +
                    '</div>' : "-";
                return $row_output;
            }
        },
        {
          // Label
          targets: -2,
          render: function (data, type, full, meta) {
            var $_status = full['status'];
            var $status = {
              'approved': { title: 'Approve', class: ' badge-light-success' },
              'pending': { title: 'Pending', class: ' badge-light-info' },
              'revision': { title: 'Revision', class: ' badge-light-warning' },
              'rejected': { title: 'Rejected', class: ' badge-light-danger' }
            };
            if (typeof $status[$_status] === 'undefined') {
              return data;
            }
            return (
              '<span class="badge rounded-pill ' +
              $status[$_status].class +
              '">' +
              $status[$_status].title +
              '</span>'
            );
          }
        },
        {
          // Actions
          targets: -1,
          title: 'Actions',
          orderable: false,
          render: function (data, type, full, meta) {
            var $id = full['id'];
            return (
              '<div class="d-inline-flex">' +
              '<a class="pe-1 dropdown-toggle hide-arrow text-primary" data-bs-toggle="dropdown">' +
              feather.icons['more-vertical'].toSvg({ class: 'font-small-4' }) +
              '</a>' +
              '<div class="dropdown-menu dropdown-menu-end">' +
              '<a href="/activity/details/' + $id + '" class="dropdown-item">' +
              feather.icons['file-text'].toSvg({ class: 'font-small-4 me-50' }) +
              'Details</a>' +
              '<a href="/activity/archive/' + $id + '"class="dropdown-item">' +
              feather.icons['archive'].toSvg({ class: 'font-small-4 me-50' }) +
              'Archive</a>' +
              '<a href="/activity/destroy/' + $id + '"class="dropdown-item delete-record">' +
              feather.icons['trash-2'].toSvg({ class: 'font-small-4 me-50' }) +
              'Delete</a>' +
              '</div>' +
              '</div>' +
              '<a href="/activity/send/' + $id + '"class="item-edit">' +
              feather.icons['send'].toSvg({ class: 'font-small-4' }) +
              '</a>' +
              '<a href="/activity/edit/' + $id + '"style="padding-left: 10px;" class="item-edit">' +
              feather.icons['edit'].toSvg({ class: 'font-small-4' }) +
              '</a>'
            );
          }
        }
      ],
      order: [[2, 'desc']],
      dom: '<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-end"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
      displayLength: 7,
      lengthMenu: [7, 10, 25, 50, 75, 100],
      buttons: [
        {
          extend: 'collection',
          className: 'btn btn-outline-secondary dropdown-toggle me-2',
          text: feather.icons['share'].toSvg({ class: 'font-small-4 me-50' }) + 'Export',
          buttons: [
            {
              extend: 'print',
              text: feather.icons['printer'].toSvg({ class: 'font-small-4 me-50' }) + 'Print',
              className: 'dropdown-item',
              exportOptions: { columns: [2, 3, 4, 5, 6] }
            },
            {
              extend: 'csv',
              text: feather.icons['file-text'].toSvg({ class: 'font-small-4 me-50' }) + 'Csv',
              className: 'dropdown-item',
              exportOptions: { columns: [2, 3, 4, 5, 6] }
            },
            {
              extend: 'excel',
              text: feather.icons['file'].toSvg({ class: 'font-small-4 me-50' }) + 'Excel',
              className: 'dropdown-item',
              exportOptions: { columns: [2, 3, 4, 5, 6] }
            },
            {
              extend: 'pdf',
              text: feather.icons['clipboard'].toSvg({ class: 'font-small-4 me-50' }) + 'Pdf',
              className: 'dropdown-item',
              exportOptions: { columns: [2, 3, 4, 5, 6] }
            },
            {
              extend: 'copy',
              text: feather.icons['copy'].toSvg({ class: 'font-small-4 me-50' }) + 'Copy',
              className: 'dropdown-item',
              exportOptions: { columns: [2, 3, 4, 5, 6] }
            }
          ],
          init: function (api, node, config) {
            $(node).removeClass('btn-secondary');
            $(node).parent().removeClass('btn-group');
            setTimeout(function () {
              $(node).closest('.dt-buttons').removeClass('btn-group').addClass('d-inline-flex');
            }, 50);
          }
        },
        {
          text: feather.icons['plus'].toSvg({ class: 'me-50 font-small-4' }) + 'Add New Record',
          className: 'create-new btn btn-primary',
          action: function (e, dt, node, config) {
            window.location.href = '/activity/create';
          },
          init: function (api, node, config) {
            $(node).removeClass('btn-secondary');
          }
        }
      ],
      language: {
        paginate: {
          // remove previous & next text from pagination
          previous: '&nbsp;',
          next: '&nbsp;'
        }
      }
    });
    $('div.head-label').html('<h6 class="mb-0">Internship Daily Timesheet (IDT)</h6>');
  }

  // Flat Date picker
  if (dt_date_table.length) {
    dt_date_table.flatpickr({
      monthSelectorType: 'static',
      dateFormat: 'm/d/Y'
    });
  }
});
