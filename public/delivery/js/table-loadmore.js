 // Loading json in talbe
 $("#table").bootstrapTable({
    formatNoMatches: function () {
        return 'No records';
    },
    //Assigning data to table docs
    data: data,
    pagination: true,
    pageSize: 10
});