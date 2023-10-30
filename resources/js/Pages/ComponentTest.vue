<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";

const emitTest = (e) => console.log(e);
</script>

<template>
    <GuestLayout>
        <InputLabel>タイトル</InputLabel>
        <TextInput
            modelValue="初期値です。"
            @update:modelValue="emitTest"
        ></TextInput>
    </GuestLayout>
</template>
