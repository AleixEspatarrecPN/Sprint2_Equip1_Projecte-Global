from kivymd.app import MDApp
from kivymd.uix.screen import Screen
from kivymd.uix.textfield import MDTextField
from kivy.lang import Builder
from helpers import username_input
from kivymd.uix.button import MDRectangleFlatButton
from helpers import contrasenya_input


class demoLogin2(MDApp):

    def build(self):
        screen = Screen()
        self.theme_cls.primary_palette= "Orange" 
        # username = MDTextField(text='Posa el usuari', #Text que volem que aparegui al "input"
        #                             pos_hint={'center_x':0.5, 'center_y':0.5},  #Centrarem 
        #                             size_hint_x= None, width=300) #Aportarem marge al input i el farem responsive
        # screen.add_widget(username)
        button = MDRectangleFlatButton(text='Mostra', pos_hint={'center_x':0.5, 'center_y': 0.3},
                                        on_release=self.show_data) #Cridarà a la funció show_data
    

        self.username = Builder.load_string(username_input)
        password = Builder.load_string(contrasenya_input)
        screen.add_widget(self.username)
        screen.add_widget(password)
        screen.add_widget(button)

        return screen

    def show_data(self,obj):
        print(self.username.text) #Mostrarà per pantalla el que s'ha escrit al username

demoLogin2().run()