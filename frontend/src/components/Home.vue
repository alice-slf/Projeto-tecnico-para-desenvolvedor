<template>
    <div class="container">
        <div class="text-center" style="margin: 20px 0px 20px 0px;">
          <h1 class="text-secondary">Biblioteca Virtual</h1><br />
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="" class="nav-item nav-link">Home</router-link>
                    <router-link to="" class="nav-item nav-link">Adicionar Editora</router-link>
                    <router-link to="" class="nav-item nav-link">Adicionar Gênero Literário</router-link>
                    <router-link to="" class="nav-item nav-link">Adicionar Autores</router-link>
                    <router-link to="" class="nav-item nav-link">Adicionar Livros</router-link>
                </div>
            </div>
        </nav>
        <br/>
        <router-view></router-view>
    </div>
</template>

<script>
    export default {}
</script>
