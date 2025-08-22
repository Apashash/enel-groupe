<?php $__env->startSection('admin_content'); ?>
    <section id="dashboard-ecommerce">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">
                            <div class="d-flex justify-content-between">
                                <div>Package Lists</div>
                                <div><a href="<?php echo e(route('admin.package.create')); ?>" class="btn btn-primary btn-sm"> <i class="bx bx-plus"></i> Add New Item </a> </div>
                            </div>
                        </h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table table-striped dataex-html5-selectors">
                                    <thead>
                                    <tr>
                                        <th>S.N</th>
                                        <th>Name</th>
                                        <th>Label</th>
                                        <th>Tab</th>
                                        <th>Photo</th>
                                        <th>Price</th>
                                        <th>Validity</th>
                                        <th>Status</th>
                                        <th>Active</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($key + 1); ?></td>
                                            <td><?php echo e($row->name); ?></td>
                                            <td><?php echo e($row->label); ?></td>
                                            <td><?php echo e($row->tab); ?></td>
                                            <td>
                                                <img width="40" src="<?php echo e(asset(view_image($row->photo))); ?>" alt="Package Photo">
                                            </td>
                                            <td><?php echo e($row->price); ?></td>
                                            <td><?php echo e($row->validity); ?>Days</td>
                                            <td><?php echo e($row->status); ?></td>
                                            <td>
                                                <a href="<?php echo e(route('admin.package.view', $row->id)); ?>"
                                                   class="btn btn-info" style="padding: 3px 7px;font-size: 20px" data-toggle="tooltip" title='View'>
                                                    <i class="bx bx-notepad"></i></a>
                                                <a href="<?php echo e(route('admin.package.create', $row->id)); ?>"
                                                   class="btn btn-warning" style="padding: 3px 7px;font-size: 20px" data-toggle="tooltip" title='Edit'>
                                                    <i class="bx bx-pencil"></i></a>
                                                <?php if($row->id != 1): ?>
                                                    <form method="POST" action="<?php echo e(route('admin.package.delete', $row->id)); ?>"
                                                          class="d-inline"><?php echo csrf_field(); ?>
                                                        <?php echo e(method_field('DELETE')); ?>

                                                        <button type="submit"
                                                                style="padding: 3px 7px;"
                                                                class="btn btn-icon btn-danger delete_confirm<?php echo e($row->id); ?>"
                                                                data-toggle="tooltip" title='Delete'>
                                                            <i class="bx bx-trash"></i>
                                                        </button>
                                                        <?php echo $__env->make('admin.partials.delete-confirmation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                    </form>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tnllabm1/public_html/resources/views/admin/pages/package/index.blade.php ENDPATH**/ ?>