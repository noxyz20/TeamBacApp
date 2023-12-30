<template>
    <div class="px-16 flex w-full space-x-8">
        <div
            class="w-4/6 px-4 py-8 bg-slate-100 border border-slate-900 rounded-lg"
        >
            <div class="text-3xl font-bold text-slate-950">Bienvenue User</div>
            <slot></slot>
        </div>
        <div class="flex flex-col space-y-8 w-2/6">
            <div
                class="w-full px-4 py-8 bg-slate-100 border border-slate-900 rounded-lg"
            >
                Widget 1
            </div>
            <div
                class="w-full px-4 py-8 bg-slate-100 border border-slate-900 rounded-lg"
            >
                Widget 2
            </div>
        </div>
    </div>
</template>
<slot></slot>

<script>
export default {};
</script>

<style></style>
