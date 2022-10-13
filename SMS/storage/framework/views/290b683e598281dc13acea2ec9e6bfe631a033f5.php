

;

<?php $__env->startSection('title'); ?>
    Register
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!-- section -->

    <section class="inner_banner pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="full">
                        <h3>Register Form</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end section -->

    <!-- section -->
    <div class="section layout_padding contact_section" style="background:#f6f6f6;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="full float-right_img">
                        <img src="<?php echo e(asset('frontEndAsset')); ?>/images/course registration_students.jpg" alt="#">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="contact_form">
                        <form action="<?php echo e(route('save-student')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <fieldset>
                                <div class="full field">
                                    <input type="text" name="student_name" placeholder="Your Name"  />
                                </div>
                                <div class="full field">
                                    <input type="email" name="student_email" placeholder="Email Address"/>
                                </div>
                                <div class="full field">
                                    <input type="text" name="student_phone" placeholder="Phone Number"/>
                                </div>

                                <div class="full field">
                                    <input type="password" name="password" placeholder="Enter Password" />
                                </div>
                                <div class="full field">
                                    <input type="file" name="image"  />
                                </div>
                                <div class="full field">
                                    <textarea name="address" id="" cols="30" rows="5"></textarea>
                                </div>

                                <div class="full field">
                                    <div class="center"><button type="submit">Register</button></div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SWE Training\xampp-BITM\htdocs\Laravel\SMS\resources\views/frontEnd/student/register.blade.php ENDPATH**/ ?>