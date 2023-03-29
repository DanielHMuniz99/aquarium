$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function calculate()
{
    if (!validate()) {
        toastr.warning(window.input_required)
        return false;
    }

    $.ajax({
        method: "POST",
        url: "/calculate",
        dataType : 'json',
        data: {height: $("#height").val(), width: $("#width").val(), length: $("#length").val()},
    }).done(function(data) {
        setResults(data);
        population(data.capacity);
    });
}

function population(liters = 0)
{
    $.ajax({
        method: "POST",
        url: "/fishpopulation/" + liters,
        dataType : 'html',
    }).done(function(data) {
        $(".population").html(data)
        loadFauna();
    });
}

function fauna(water)
{
    $.ajax({
        method: "POST",
        url: "/fauna/",
        dataType : 'html',
        data: {
            water: water,
            liters: $("#capacity").text(),
        }
    }).done(function(data) {
        $(".fauna").html(data)
        console.log(data)
    });
}

function loadFauna()
{
    $.ajax({
        method: "GET",
        url: "/fauna",
        dataType : 'html',
    }).done(function(data) {
        $(".fauna").html(data)
    });
}

function validate()
{
    if (!$("#height").val() || !$("#width").val() || !$("#length").val()) {
        return false;
    }

    return true;
}

function setResults(data)
{
    $("#capacity").text(data.capacity)
    $("#filtering").text(data.filtering)
}

function tab(water = "")
{
    fauna(water);
}
