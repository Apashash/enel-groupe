<script>
    document.querySelector('.delete_confirm'+<?php echo e($row->id); ?>).addEventListener('click', function (e){
        var form = document.querySelector('.delete_confirm'+<?php echo e($row->id); ?>).parentElement;
        e.preventDefault()
        Swal.fire({
            title: 'Are you sure?',
            text: "If you delete this, it will be gone forever.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
    })
</script>
<?php /**PATH /home/demoyes1/g1.yesuntech.xyz/resources/views/admin/partials/delete-confirmation.blade.php ENDPATH**/ ?>