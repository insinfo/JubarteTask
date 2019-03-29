$(document).ready(function () {
    allTasks()
})

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
                                                <span class="heading-text"><i class="icon-history position-left text-success"></i> Atualização: ${itemTask.date_created}</span>
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

const allTasks = () => {

    const api = "api/tasks"

    $.getJSON(api, function (data) {
        for (let i = 0; i < data.length; i++) {
            console.log(data[i])
            //REPRODUZ O HTML COM AS TASKS
            const Item = htmlTask(data[i])
            $("#timeLine").append(Item)

        }
    })


}
