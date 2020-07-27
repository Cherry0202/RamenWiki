<template>
    <div :class="[{'-drag': isDrag == 'new'}]"
        @dragover.prevent="checkDrag($event, 'new', true)"
　　　　　　　　　　　　　　　　@dragleave.prevent="checkDrag($event, 'new', false)"
        @drop.prevent="onDrop"
    >
        <i aria-hidden="true" class="fa fa-plus"></i>
        <div class="drop">
            <p class="drag-drop-info">ここにファイルをドロップ</p>
            <p>または</p>
            <label for="corporation_file" class="btn btn-success">
                ファイルを選択
                <input type="file" class="drop__input" style="display:none;"
                   id="corporation_file"
                   @change="onDrop"
                >
            </label>
        {{ fileForm.fileName }}
        </div>
    </div>
</template>
 
<script>
export default {
    data() {
        return {
            isDrag: null
        }
    },
    methods: {
        checkDrag(event, key, status){
            if (status && event.dataTransfer.types == "text/plain") {
                return false
            }
            this.isDrag = status ? key : null
        },
    }
};