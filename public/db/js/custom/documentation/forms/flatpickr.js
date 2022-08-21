"use strict";
var KTFormsFlatpickrDemos = {
    init: function(t) {
        $("#kt_datepicker_1").flatpickr(), $("#kt_datepicker_2").flatpickr(), $("#kt_datepicker_3").flatpickr({
                enableTime: !0,
                dateFormat: "Y-m-d H:i",
                disable: [{
                    from: "2022-01-05",
                    to: "2022-08-10"
                }]
            }), $("#kt_datepicker_4").flatpickr({
                onReady: function() {
                    this.jumpToDate("2025-01")
                },
                disable: ["2025-01-10", "22025-01-11", "2025-01-12", "2025-01-13", "2025-01-14", "2025-01-15", "2025-01-16", "2025-01-17"],
                dateFormat: "Y-m-d"
            }), $("#kt_datee").flatpickr({
                enableTime: 0,
                dateFormat: "Y-m-d",
                minDate: "today"
            }), $("#kt_dateex").flatpickr({
                enableTime: 0,
                dateFormat: "Y-m-d",
                defaultDate: document.getElementById('input_tanggal').value
            }),
            $("#kt_datepicker_5").flatpickr({
                onReady: function() {
                    this.jumpToDate("2025-01")
                },
                dateFormat: "Y-m-d",
                disable: [{
                    from: "2025-01-05",
                    to: "2025-01-25"
                }, {
                    from: "2025-02-03",
                    to: "2025-02-15"
                }]
            }),
            $("#kt_datepicker_6").flatpickr({
                onReady: function() {
                    this.jumpToDate("2025-01")
                },
                mode: "multiple",
                dateFormat: "Y-m-d",
                defaultDate: ["2025-01-05", "2025-01-10"]
            }),
            $("#kt_datepicker_7").flatpickr({
                altInput: !0,
                altFormat: "F j, Y",
                dateFormat: "Y-m-d",
                mode: "range"
            }),
            $("#kt_datepicker_8").flatpickr({
                enableTime: !0,
                noCalendar: !0,
                dateFormat: "H:i",
                minTime: "08:00",
                defaultHour: "8",
                maxTime: "21:00"
            }), $("#kt_datepicker_88").flatpickr({
                enableTime: !0,
                noCalendar: !0,
                dateFormat: "H:i",
                defaultDate: document.getElementById('input_waktu').value,
                minTime: "08:00",
                maxTime: "21:00"
            }),
            $("#kt_datepicker_9").flatpickr({
                weekNumbers: !0
            }),
            $("#kt_datepicker_10").flatpickr()
    }
};
KTUtil.onDOMContentLoaded((function() {
    KTFormsFlatpickrDemos.init()
}));