let dataScheduleFirst = dataSchedule[0];
$(function () {
    $('.calendar-container').calendar({
        date: new Date(dataScheduleFirst),
        prevButton: "Sebelumnya",
        nextButton: "Selanjutnya",
        showTodayButton: false,
        monthMap: {
            1: "Januari",
            2: "Februari",
            3: "Maret",
            4: "April",
            5: "Mei",
            6: "Juni",
            7: "Juli",
            8: "Agustus",
            9: "September",
            10: "Oktober",
            11: "November",
            12: "Desember",
        },
        dayMap: {
            0: "Minggu",
            1: "Senin",
            2: "Selasa",
            3: "Rabu",
            4: "Kamis",
            5: "Jum'at",
            6: "Sabtu",
        }
    });
});
