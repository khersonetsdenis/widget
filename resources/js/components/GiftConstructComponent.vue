<template>
    <div class="tab-content">
        <div class="tab-pane active" id="tab11">
            <div class="row">
                <div class="col-md-3">
                    <div class="panel-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <h4>
                                    <i class="icon md-format-color-fill"
                                       aria-hidden="true"></i>Заголовок
                                </h4>
                                <span class="field-validation-valid text-danger validation-block"></span>
                                <div class="input-group">
                                    <input class="form-control" id="BackgroundColor" name="BackgroundColor"
                                           type="text" v-on:input="headline" :value="message">
                                </div>
                            </div>
                            <div class="form-group">
                                <h4>
                                    <i class="icon md-format-color-fill"
                                       aria-hidden="true"></i>Фон кнопки
                                </h4>

                                <div class="widget_style_wrap">
                                    <!-- ngRepeat: style in wizard.defaults.presence_styles -->
                                <div class="widget_style_cell ng-scope" ng-repeat="style in wizard.defaults.presence_styles">
                                    <input v-model="bColor" type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#58616a">
                                    <div class="widget_style_item widget_style_color_1" style="background: rgb(88, 97, 106);"></div>
                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                <div class="widget_style_cell ng-scope">
                                    <input v-model="bColor" type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#707070">
                                    <div class="widget_style_item widget_style_color_2" style="background: rgb(112, 112, 112);"></div>
                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                <div class="widget_style_cell ng-scope">
                                    <input v-model="bColor" type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#b3b1b2">
                                    <div class="widget_style_item widget_style_color_3" style="background: rgb(179, 177, 178);"></div>
                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                <div class="widget_style_cell ng-scope">
                                    <input v-model="bColor" type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#FFFF00">
                                    <div class="widget_style_item widget_style_color_4" style="background: #FFFF00"></div>
                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                <div class="widget_style_cell ng-scope">
                                    <input v-model="bColor" type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#a27b50">
                                    <div class="widget_style_item widget_style_color_5" style="background: rgb(162, 123, 80);"></div>
                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                <div class="widget_style_cell ng-scope">
                                    <input v-model="bColor" type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#E07318">
                                    <div class="widget_style_item widget_style_color_6" style="background: #E07318"></div>
                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                <div class="widget_style_cell ng-scope">
                                    <input v-model="bColor" type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#2f87e1">
                                    <div class="widget_style_item widget_style_color_7" style="background: rgb(47, 135, 225);"></div>
                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                <div class="widget_style_cell ng-scope">
                                    <input v-model="bColor" type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#339ddb">
                                    <div class="widget_style_item widget_style_color_8" style="background: rgb(51, 157, 219);"></div>
                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                <div class="widget_style_cell ng-scope">
                                    <input v-model="bColor" type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#3AB004">
                                    <div class="widget_style_item widget_style_color_9" style="background: #3AB004"></div>
                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                <div class="widget_style_cell ng-scope">
                                    <input v-model="bColor" type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#0000FE">
                                    <div class="widget_style_item widget_style_color_10" style="background: #0000FE"></div>
                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                <div class="widget_style_cell ng-scope">
                                    <input v-model="bColor" type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#00FFFF">
                                    <div class="widget_style_item widget_style_color_11" style="background: #00FFFF"></div>
                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                <div class="widget_style_cell ng-scope">
                                    <input v-model="bColor" type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#00FF79">
                                    <div class="widget_style_item widget_style_color_12" style="background: #00FF79"></div>
                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                <div class="widget_style_cell ng-scope">
                                    <input v-model="bColor" type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#80FF00">
                                    <div class="widget_style_item widget_style_color_13" style="background: #80FF00"></div>
                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                <div class="widget_style_cell ng-scope">
                                    <input v-model="bColor" type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#00FF00">
                                    <div class="widget_style_item widget_style_color_14" style="background: #00FF00"></div>
                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                <div class="widget_style_cell ng-scope">
                                    <input v-model="bColor" type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#5a4c81">
                                    <div class="widget_style_item widget_style_color_15" style="background: rgb(90, 76, 129);"></div>
                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                <div class="widget_style_cell ng-scope">
                                    <input v-model="bColor" type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#AC0480">
                                    <div class="widget_style_item widget_style_color_16" style="background: #AC0480"></div>
                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                <div class="widget_style_cell ng-scope">
                                    <input v-model="bColor" type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#dd375b">
                                    <div class="widget_style_item widget_style_color_17" style="background: rgb(221, 55, 91);"></div>
                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                <div class="widget_style_cell ng-scope">
                                    <input v-model="bColor" type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#e74b94">
                                    <div class="widget_style_item widget_style_color_18" style="background: rgb(231, 75, 148);"></div>
                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                <div class="widget_style_cell ng-scope">
                                    <input v-model="bColor" type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#FE0000">
                                    <div class="widget_style_item widget_style_color_19" style="background: #FE0000"></div>
                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                <div class="widget_style_cell ng-scope">
                                    <input v-model="bColor" type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#f03f51">
                                    <div class="widget_style_item widget_style_color_20" style="background: rgb(240, 63, 81);"></div>
                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                <div class="widget_style_cell ng-scope">
                                    <input v-model="bColor" type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#FF00FF">
                                    <div class="widget_style_item widget_style_color_21" style="background: #FF00FF"></div>
                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                <div class="widget_style_cell ng-scope">
                                    <input v-model="bColor" type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#FF7F00">
                                    <div class="widget_style_item widget_style_color_21" style="background: #FF7F00"></div>
                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                <div class="widget_style_cell ng-scope">
                                    <input v-model="bColor" type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#7383b5">
                                    <div class="widget_style_item widget_style_color_22" style="background: rgb(115, 131, 181);"></div>
                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                <div class="widget_style_cell ng-scope">
                                    <input v-model="bColor" type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#7F00FF">
                                    <div class="widget_style_item widget_style_color_1" style="background: #7F00FF"></div>
                                </div>
                            </div>

                                <span class="field-validation-valid text-danger validation-block"></span>
                                <div class="input-group">
                                    <input class="form-control" id="BackgroundColor" name="BackgroundColor"
                                           type="text" v-model="bColor" value="#9657A8">
                                </div>
                            <div class="form-group">
                                <h4>
                                    <i class="icon md-border-color" aria-hidden="true"></i>Цвет подарка
                                </h4>
                                <span class="field-validation-valid text-danger validation-block"></span>
                                <div class="form-group">

                                    <div class="input-group mb-3">
                                        <select class="custom-select form-control" v-model="iColor" id="inputGroupSelect01">
                                            <option value="#000" style="background: #000">Черный</option>
                                            <option value="#fff" style="background: #fff">Белый</option>
                                            <option value="#ccc" style="background: #ccc">Серый</option>
                                        </select></div></div>
                                </div>
                                <div class="input-group">
                                    <input v-model="iColor" class="form-control" id="BackgroundColor" name="BackgroundColor"
                                           type="text" value="#9657A8">
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit"
                                        class="btn btn-lg mt-20 mb-20 btn-success text-light waves-effect waves-classic">
                                    <i class="icon md-check mr-5" aria-hidden="true"></i>Сохранить
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3">
                    <div id="gift" class="gift">
                        <p>{{ message }}</p>
                        <div :style="colors" class="pulse"><i class="icon-present" :style="colorsIcon" style="font-size: 28px;"></i></div>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>

        <div class="tab-pane" id="tab14">
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN SAMPLE TABLE PORTLET-->
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-social-dribbble font-green"></i>
                                <span class="caption-subject font-green bold uppercase">Simple Table</span>
                            </div>
                        </div>
                       <div class="row">
                           <div class="col-md-6">
                               <form action="./api/gifts" method="post" v-on:submit.prevent="addNewGift">
                                   <label for="giftnameinput">Название подарка</label>
                                   <input v-model="giftname" id="giftnameinput" class="form-control" name="title" placeholder="Введите название подарка">
                                   <button v-if="this.isEdit == false" type="submit" class="btn btn-success btn-block  mt-3">
                                       Добавить
                                   </button>
                                   <button v-else type="button" v-on:click="updateGift()" class="btn btn-primary btn-block  mt-3">
                                       Обновить
                                   </button>
                               </form>
                           </div>
                       </div>



                            <div class="portlet-body">
                                <div class="table-scrollable">

                                    <table class="table">
                                         <tr v-for="(gift) in gifts" v-bind:key="gift.id" v-bind:title="gift.title">
                                             <td class="text-left">{{gift.title}}</td>
                                             <td class="text-right">
                                                 <button v-on:click="editGift(gift.title, gift.id)" class=" btn btn-info ">Редактировать</button>
                                                 <button v-on:click="deleteGift(gift.id)" class=" btn btn-danger ">X</button>
                                             </td>
                                         </tr>
                                     </table>
                                 </div>
                             </div>

                     </div>
                     <!-- END SAMPLE TABLE PORTLET-->

                </div>
            </div>
        </div>
        <div class="tab-pane" id="tab15">
            <div class="row">
                <div class="col-md-6">
                    <div class="hs-gifts-body">
                        <div class="hs-gifts-header">
                            <div class="hs-gifts-headerTitle">
                                Верхний заголовок
                            </div>
                            <div class="hs-gifts-headerClose hs-gifts-headerClose__white">
                            </div>
                        </div>
                        <div class="hs-gifts-middle">

                                <span class="stap_headline">Вы выиграли ...</span><br>
                                <span class="stap_text">Заполните форму чтобы актвировать подарок</span>

                            <div class="gift-form">
                                <form action="./api/leads"  method='POST' v-on:submit.prevent="addNewLead">
                                    <div class="form-group">
                                        <label>Имя</label>
                                        <input v-model="leadname" type="text" name="name" class="form-control" placeholder="Введите имя">
                                    </div>
                                    <div class="form-group">
                                        <label>Телефон</label>
                                        <input v-model="leadphone" type="text" name="phone" class="form-control" placeholder="Введите телефон">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Отправить</button>
                                </form>
                            </div>
                        </div>
                        <div class="hs-gifts-footer">
                            <a href="#" target="_blank">
                                <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 8L1 0H7L5 5.5H12L4 16L6 8H0Z" fill="rgba(255,255,255,.8)"></path>
                                    <path d="M1.5 8L4 0H1L0 8H1.5Z" fill="#FFF"></path>
                                    <path d="M8 8H6L4 16L8 8Z" fill="#FFF"></path>
                                </svg>
                                виджет от GiftBox
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="tab-pane" id="tab16">
            <p> Howdy, I'm in Section 6. </p>
        </div>
        <div class="tab-pane" id="tab17">
            <p> Howdy, I'm in Section 7. </p>
        </div>
        <div class="tab-pane" id="tab18">
            <p> Howdy, I'm in Section 8. </p>
        </div>
        <div class="tab-pane" id="tab19">
            <p> Howdy, I'm in Section 9. </p>
        </div>

    </div>
</template>



<script>

    import axios from 'axios';

    export default {
        data() {
            return {
            gifts: [],
            id: '',
            title: '',
            giftname: '',
            isEdit: false,
            name: '',
            phone: '',
            message: 'Хотите подарок?',
            top_title: 'Верхний заголовок',
            btn_text: 'Поделиться',
            facebook_n: 'https://www.facebook.com/plugins/post.php?href=',
            facebook_m: 'https%3A%2F%2Fwww.facebook.com%2Flychikdp%2Fposts%2F2244057089176198',
            fasebook_url: 'https://www.facebook.com/lychikdp',
            bColor: 'red',
            iColor: '#fff',
            bColorStapOne: 'orange',
            buttonColorStapOne: 'blue'

            }
        },
        mounted () {
            this.getGift()
        },
        name: "GiftConstructComponent",
        methods: {
            headline: function (event) {
                this.message = event.target.value;
            },
            topTitle: function (event) {
                this.top_title = event.target.value;
            },
            btnText: function (event) {
                this.btn_text = event.target.value;
            },
            facebookUrl: function (event) {
                this.facebook_m = event.target.value;
            },
            getGift () {
                axios({ method: 'GET', url: '/api/gifts' }).then(
                    result => {
                        console.log(result.data)
                        this.gifts = result.data
                    },
                    error => {
                        console.error(error)
                    }
                )
            },

            getLead () {
                axios({ method: 'GET', url: '/leads' }).then(
                    result => {
                        console.log(result.data)
                        this.leads = result.data
                    },
                    error => {
                        console.error(error)
                    }
                )
            },
            addNewGift () {
                axios.post('/api/gift',
                    { title: this.giftname }
                ).then((res) => {
                    this.giftname = ''
                    this.getGift()
                    console.log(res)
                }).catch((err) => {
                    console.log(err)
                })
            },

            editGift (title, id) {
                this.id = id
                this.giftname = title
                this.isEdit = true
            },
            updateGift () {
                axios.put(`/api/gift/${this.id}`,
                    { title: this.giftname }
                ).then((res) => {
                    this.giftname = ''
                    this.isEdit = false
                    this.getGift()
                    console.log(res)
                }).catch((err) => {
                    console.log(err)
                })
            },
            deleteGift (id) {
                axios.delete(`/api/gift/${id}`
                ).then((res) => {
                    this.giftname = ''
                    this.getGift()
                    console.log(res)
                }).catch((err) => {
                    console.log(err)
                })
            },

            addNewLead () {
                axios.post('/leads',
                    { name: this.leadname,
                      phone: this.leadphone}
                ).then((res) => {
                    this.leadname = ''
                    this.leadphone = ''
                    this.getLead()
                    console.log(res)
                }).catch((err) => {
                    console.log(err)
                })
            },
        },
        computed: {
            colors: function () {
                return {
                    background: this.bColor,
                }
            },
            colorsIcon: function () {
                return {
                    color: this.iColor,
                }
            },
            colorsStapOne: function () {
                return {
                    background: this.bColorStapOne,
                }
            },
            bColorsStapOne: function () {
                return {
                    background: this.buttonColorStapOne,
                }
            }
        }
    }

</script>

<style scoped>

</style>