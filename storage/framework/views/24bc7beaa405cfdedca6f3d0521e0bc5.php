<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Pocetna-Udomljavanja')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="grid grid-cols-1 gap-4 p-4 justify-items-left">
 
            <div>
                <h1>Upit 1: Ispis imena mačaka i njenog boja udomljavanja</h1>
                        <hr/>
                        <?php $__currentLoopData = $most_common_cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $most_common_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <p><?php echo e($loop->iteration); ?>. <?php echo e($most_common_cat->name); ?> - <?php echo e($most_common_cat->brojac); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    
</div>
</div>
</div>
</div>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="grid grid-cols-1 gap-4 p-4 justify-items-left">
                    <div>
                        <h1>Upit 2: Ispis naziva država iz kojih potječu mačke koje su se najviše udomljavale i broj udomljavanja iz te države</h1>
                        <hr/>
                        <?php $__currentLoopData = $most_common_cat_countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $most_common_cat_country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <p><?php echo e($loop->iteration); ?>. <?php echo e($most_common_cat_country->country); ?> - <?php echo e($most_common_cat_country->brojac); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    </div>
</div>
</div>
</div>
                    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="grid grid-cols-1 gap-4 p-4 justify-items-left">
                    <div>
                        <h3>Upit 3: Ispisati broj udomljavanja odrađenih u periodu od 1.12.2021 do 2023.12.31</h3>
                        <hr/>
                        <p><?php echo e($number_of_adoptions); ?></p>
                    </div>
                    </div>
</div>
</div>
</div>
                    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="grid grid-cols-1 gap-4 p-4 justify-items-left">
                    <div>
                        <h1>Upit 4: Ispis imena i prezimena radnika koji su dali na udomljavanje mačke kategorije Bengalska u periodu 10.12.2021 do 31.12.2023.</h1>
                        <hr/>
                        <?php $__currentLoopData = $bengal_cat_workers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bengal_cat_worker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p><?php echo e($loop->iteration); ?>. <?php echo e($bengal_cat_worker->worker_name); ?> - <?php echo e($bengal_cat_worker->worker_lastname); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                </div>
</div>
</div>
</div>
                <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="grid grid-cols-1 gap-4 p-4 justify-items-left">
                <div>
                        <h1>Upit 5: Ispis prezimena radnika i njegovog opisa posla koji je dao na udomljavanje mačke pod svojim rednim brojem koda 3</h1>
                        <hr/>
                        <?php $__currentLoopData = $turner_cat_workers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $turner_cat_worker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p><?php echo e($loop->iteration); ?>. <?php echo e($turner_cat_worker->worker_lastname); ?> - <?php echo e($turner_cat_worker->worker_description); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                </div>
</div>
</div>
</div>
                <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="grid grid-cols-1 gap-4 p-4 justify-items-left">
                <div>
                        <h3>Upit 6: Ispisati broj mačaka koje su primljene u centar u periodu od 1.12.2021 do 2023.12.31 bez obzira da li su one date na udomljavanje ili ne</h3>
                        <hr/>
                        <p><?php echo e($number_of_cats); ?></p>
                    </div>
                    </div>
</div>
</div>
</div>
                    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="grid grid-cols-1 gap-4 p-4 justify-items-left">
                    <div>
                        <h1>Upit 7: Ispis naziva države iz koje mačke potječu i iz koje je najveći broj udomljavanja odrađen, te broj udomljavanja koja su odrađena za mačke koje su kategorije Bengalska</h1>
                        <hr/>
                        <?php $__currentLoopData = $most_common_cat_bengalska; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $most_common_cat_bengalsk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <p><?php echo e($loop->iteration); ?>. <?php echo e($most_common_cat_bengalsk->country); ?> - <?php echo e($most_common_cat_bengalsk->brojac); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    </div>
</div>
</div>
</div>
                    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="grid grid-cols-1 gap-4 p-4 justify-items-left">
                    <div>
                        <h1>Upit 8: Ispis imena i prezimena radnika koji su dali na udomljavanje mačke osobi pod imenom Ema u periodu 10.12.2021 do 31.12.2023.</h1>
                        <hr/>
                        <?php $__currentLoopData = $ema_cat_workers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ema_cat_worker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p><?php echo e($loop->iteration); ?>. <?php echo e($ema_cat_worker->worker_name); ?> - <?php echo e($ema_cat_worker->worker_lastname); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>    
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Korisnik\Desktop\Sapice\resources\views/adoptions/index.blade.php ENDPATH**/ ?>