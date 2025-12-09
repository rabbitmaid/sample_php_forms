const notices = document.querySelectorAll('.notice');
const duration = 5000;

notices.forEach(notice => {

    setTimeout(() => {
        notice.classList.add('hidden');
    }, duration);

});


// Handle delete confirmation

// html full loads before js runs
document.addEventListener('DOMContentLoaded', () => {


    const deleteForms = document.querySelectorAll('.delete-form');

    deleteForms.forEach(form => {

        form.addEventListener('submit', (event) => {
            event.preventDefault();

            // if(confirm("Are you sure you want to delete!")) {
            //     form.submit();
            // }

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if(result.isConfirmed) {
                    form.submit();
                }
            });

        });


    });



});