function clickTask() {

    $("#id").val("")
    $("#allCategories").val("")
    $("#title").val("")
    $("#text").val("")
    $('#modalTask').modal('show')

}

// ROW PARA EXIBIR NA TIMELINE
const htmlTask = (itemTask) => {
    let Html = `

<div class="timeline-row">
<div class="timeline-icon">
    <div class="bg-blue">
        <i class="icon-hammer"></i>
    </div>
</div>

<div class="panel panel-flat timeline-content">
    <div class="panel-heading">
        <h6 class="panel-title">${itemTask.title}</h6>
        <div class="heading-elements">
            <span class="heading-text"><i class="icon-history position-left text-success"></i> Atualização: ${itemTask.updated_at}</span>
            <div>
            <a href='' onclick="deleteTask(${itemTask.id})" class='btn btn-danger'>Excluir</a>
            <button onclick="showTask(${itemTask.id})" class='btn btn-primary'>Editar</button>
            
            </div>
        </div>
    </div>

    <div class="panel-body">
        <p>${itemTask.text}</p>
    </div>
</div>
</div>
`

    return Html
}

// CONSUMINDO O WEBSERVICE PARA LISTAR AS TASKS
const allTasks = () => {

    const api = "api/tasks"

    $.getJSON(api, function (data) {
        for (let i = 0; i < data.length; i++) {
            //REPRODUZ O HTML COM AS TASKS
            const timelineHtml = htmlTask(data[i])
            $("#timeLine").append(timelineHtml)

        }
    })

}

const deleteTask = (id) => {
    $.ajax({
        type: "DELETE",
        url: "api/tasks/delete/" + id,
        context: this,
        success: function () {
            console.log('delete success')
            if (e)
                e.remove()

        },
        error: function () {
            console.log(error)
        },
    })
}

const loadingCategories = () => {

    $.getJSON('api/categories', function (data) {
        //categoriaProduto
        for (i = 0; i < data.length; i++) {
            option = '<option value="' + data[i].id + '">' + data[i].name + '</option>'
            $('#allCategories').append(option)
        }
    })

}

function showTask(id) {
    $.getJSON('api/task/show/' + id, function (data) {
        console.log(data)
        $("#id").val(data.id)
        $("#allCategories").val(data.categorie_id)
        $("#title").val(data.title)
        $("#text").val(data.text)
        $('#modalTask').modal('show')
    })
}

const newTask = () => {
    data_task = {
        categorie_id: $("#allCategories").val(),
        title: $("#title").val(),
        text: $("#text").val()
    }

    $.post("api/tasks/new", data_task, function (data) {
        console.log(data)

    })
}

function putTask() {
    data_task = {
        id: $("#id").val(),
        categorie_id: $("#allCategories").val(),
        title: $("#title").val(),
        text: $("#text").val()
    }

    $.ajax({
        type: "PUT",
        url: "api/tasks/update/" + data_task.id,
        context: this,
        data: data_task,
        success: function (data) {
            console.log('success')
            if (e) {
                console.log(e)
            }

        },

        error: function () {
            console.log(error)
        }
    })
}

const sendTaks = () => {

    if ($("#id").val() != '')
        putTask()
    else
        newTask()
    $("#modalTask").modal('hide')

}


$(document).ready(function () {
    allTasks()
    loadingCategories()
    instanceTask()
    sendTaks()
})