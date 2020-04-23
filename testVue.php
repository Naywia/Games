<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <title>Vue Framework</title>

        <!-- Site Icons -->
        <link rel="apple-touch-icon" sizes="180x180" href="/../images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/../images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/../images/favicon/favicon-16x16.png">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="styleII.css">

        <!-- Js -->
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    </head>
    <body>
        <div id="app">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong> All Resources</strong></div>
                <div class="row">
                    <div class="search-wrapper panel-heading col-sm-12">
                        <input class="form-control" type="text" v-model="searchQuery" placeholder="Search" />
                    </div>                        
                </div>
                <div class="table-responsive">
                    <table v-if="resources.length" class="table">
                        <thead>
                            <tr>
                                <th>Resource</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="item in resultQuery">
                                <td><a v-bind:href="item.uri" target="_blank">{{item.icon}}</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script>
new Vue({
    el: '#app',
    data() {
        return {
            searchQuery: null,
            resources: [
                {title: "ABE Attendance", uri: "images/games/spyro.png", category: "a", icon: 'images/games/spyro.png'},
                {title: "Accounting Services", uri: "images/games/stardew.png", category: "a", icon: 'images/games/stardew.png'},
                {title: "Administration", uri: "aaaa.com", category: "a", icon: null},
                {title: "Advanced Student Lookup", uri: "bbbb.com", category: "b", icon: null},
                {title: "Art & Sciences", uri: "bbbb.com", category: "b", icon: null},
                {title: "Auxiliares Services", uri: "bbbb.com", category: "b", icon: null},
                {title: "Basic Skills", uri: "cccc.com", category: "c", icon: null},
                {title: "Board of Trustees", uri: "dddd.com", category: "d", icon: null}
            ]
        };
    },
    computed: {
        resultQuery() {
            if (this.searchQuery) {
                return this.resources.filter((item) => {
                    return this.searchQuery.toLowerCase().split(' ').every(v => item.title.toLowerCase().includes(v))
                })
            } else {
                return this.resources;
            }
        }
    }


})
        </script>
    </body>
</html>
