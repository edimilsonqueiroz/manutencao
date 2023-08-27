<script setup>
    const props = defineProps({
        show: Boolean
    });

</script>
<template>
   <Teleport to="body">
        <Transition>
            <div v-if="show" class="fixed top-0 left-0 right-0 bottom-0 z-50 bg-black/20 flex items-center justify-center">
                <div class="md:w-[400px] w-full bg-white rounded-md shadow h-28">
                    <slot/>
                </div>
            </div>
        </Transition>
   </Teleport>
</template>

