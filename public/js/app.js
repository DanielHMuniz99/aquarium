$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function calculate()
{
    $.ajax({
        method: "POST",
        url: "/calculate",
        dataType : 'json',
        data: {height: $("#height").val(), width: $("#width").val(), length: $("#length").val()},
    }).done(function(data) {
        console.log(data, data.capacity)
        $("#capacity").text(data.capacity)
        $("#filtering").text(data.filtering)
    });
}