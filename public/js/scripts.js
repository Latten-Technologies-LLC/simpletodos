$(function() 
{
    // Get the todo from local storage
    var todo = localStorage.getItem('todo');

    // If todo is not empty
    if(todo != null)
    {
        // Set the todo
        $("#todo").val(todo);
    }

    $(document).on('keyup', '#todo', function(e)
    {
        var todo = $(this).val();
        var saver = $("#saver");

        if(todo.length > 0)
        {
            saver.html("Saving...");

            $.ajax({
                url: '/store',
                type: 'POST',
                data: {todo: todo, _token: $('meta[name="csrf-token"]').attr('content')},
                success: function(data)
                {
                    saver.html("Saved");

                    // Save to local storage
                    localStorage.setItem('todo', todo);
                },
                error: function(data)
                {
                    saver.html("Error");
                }
            });

            // Thats it..
        }
    });
});