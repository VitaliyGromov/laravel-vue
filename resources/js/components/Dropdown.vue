<template>
    <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ name }}
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <slot></slot>
        </div>
    </div>
</template>

<script>

export default {
    props: ['name']
}
</script>