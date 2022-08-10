"use strict";
var KTGeneralFullCalendarBasicDemos = {
    init: function () {
        var e, t, i, n, r, o;
        e = moment().startOf("day"), t = e.format("YYYY-MM"), i = e.clone().subtract(1, "day").format("YYYY-MM-DD"), n = e.format("YYYY-MM-DD"), r = e.clone().add(1, "day").format("YYYY-MM-DD"), o = document.getElementById("kt_docs_fullcalendar_basic"), new FullCalendar.Calendar(o, {
            headerToolbar: {
                left: "prev,next today",
                center: "title",
                right: "dayGridMonth,timeGridWeek,timeGridDay,listMonth"
            },
            height: 800,
            contentHeight: 780,
            aspectRatio: 3,
            nowIndicator: !0,
            now: n + "T09:25:00",
            views: {
                dayGridMonth: {
                    buttonText: "month"
                },
                timeGridWeek: {
                    buttonText: "week"
                },
                timeGridDay: {
                    buttonText: "day"
                }
            },
            initialView: "dayGridMonth",
            initialDate: n,
            editable: !0,
            dayMaxEvents: !0,
            navLinks: !0,
            events: [{
                title: "All Day Event",
                start: t + "-01",
                description: "Toto lorem ipsum dolor sit incid idunt ut",
                className: "fc-event-danger fc-event-solid-warning"
            }, {
                title: "Reporting",
                start: t + "-14T13:30:00",
                description: "Lorem ipsum dolor incid idunt ut labore",
                end: t + "-14",
                className: "fc-event-success"
            }, {
                title: "Company Trip",
                start: t + "-02",
                description: "Lorem ipsum dolor sit tempor incid",
                end: t + "-03",
                className: "fc-event-primary"
            }, {
                title: "ICT Expo 2017 - Product Release",
                start: t + "-03",
                description: "Lorem ipsum dolor sit tempor inci",
                end: t + "-05",
                className: "fc-event-light fc-event-solid-primary"
            }, {
                title: "Dinner",
                start: t + "-12",
                description: "Lorem ipsum dolor sit amet, conse ctetur",
                end: t + "-10"
            }, {
                id: 999,
                title: "Repeating Event",
                start: t + "-09T16:00:00",
                description: "Lorem ipsum dolor sit ncididunt ut labore",
                className: "fc-event-danger"
            }, {
                id: 1e3,
                title: "Repeating Event",
                description: "Lorem ipsum dolor sit amet, labore",
                start: t + "-16T16:00:00"
            }, {
                title: "Conference",
                start: i,
                end: r,
                description: "Lorem ipsum dolor eius mod tempor labore",
                className: "fc-event-primary"
            }, {
                title: "Meeting",
                start: n + "T10:30:00",
                end: n + "T12:30:00",
                description: "Lorem ipsum dolor eiu idunt ut labore"
            }, {
                title: "Lunch",
                start: n + "T12:00:00",
                className: "fc-event-info",
                description: "Lorem ipsum dolor sit amet, ut labore"
            }, {
                title: "Meeting",
                start: n + "T14:30:00",
                className: "fc-event-warning",
                description: "Lorem ipsum conse ctetur adipi scing"
            }, {
                title: "Happy Hour",
                start: n + "T17:30:00",
                className: "fc-event-info",
                description: "Lorem ipsum dolor sit amet, conse ctetur"
            }, {
                title: "Dinner",
                start: r + "T05:00:00",
                className: "fc-event-solid-danger fc-event-light",
                description: "Lorem ipsum dolor sit ctetur adipi scing"
            }, {
                title: "Birthday Party",
                start: r + "T07:00:00",
                className: "fc-event-primary",
                description: "Lorem ipsum dolor sit amet, scing"
            }, {
                title: "Click for Google",
                url: "http://google.com/",
                start: t + "-28",
                className: "fc-event-solid-info fc-event-light",
                description: "Lorem ipsum dolor sit amet, labore"
            }],
            eventContent: function (e) {
                var t = $(e.el);
                e.event.extendedProps && e.event.extendedProps.description && (t.hasClass("fc-day-grid-event") ? (t.data("content", e.event.extendedProps.description), t.data("placement", "top"), KTApp.initPopover(t)) : t.hasClass("fc-time-grid-event") ? t.find(".fc-title").append('<div class="fc-description">' + e.event.extendedProps.description + "</div>") : 0 !== t.find(".fc-list-item-title").lenght && t.find(".fc-list-item-title").append('<div class="fc-description">' + e.event.extendedProps.description + "</div>"))
            }
        }).render()
    }
};
KTUtil.onDOMContentLoaded((function () {
    KTGeneralFullCalendarBasicDemos.init()
}));