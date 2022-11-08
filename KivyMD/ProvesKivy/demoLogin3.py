from kivymd.app import MDApp
from kivymd.uix.screen import Screen
from kivymd.uix.textfield import MDTextField
from kivy.lang import Builder
from helpers import username_input
from kivymd.uix.button import MDRectangleFlatButton, MDFlatButton
from helpers import contrasenya_input
from kivymd.uix.dialog import MDDialog

class demoLogin3(MDApp):

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
    #Estructura de control per comprovar que la informació és correcta
        if self.username.text is "":
            check_string = "Si us plau, posa un usuari."
        else:
            check_string = self.username.text + " no existeix"
            
        close_button = MDFlatButton(text='Tancar', on_release = self.close_dialog)
        more_button = MDFlatButton(text='Més')

        #Ens sortirà un pop-up del que hem posat (dialog)
        self.dialog = MDDialog(title='Usuari', text=check_string, 
                          buttons=[close_button, more_button])

        self.dialog.open()

    def close_dialog(self,obj):
        self.dialog.dismiss()

            
demoLogin3().run()