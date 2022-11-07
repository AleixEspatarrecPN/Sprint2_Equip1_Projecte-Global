from kivymd.app import MDApp
from kivymd.uix.screen import Screen
from kivymd.uix.textfield import MDTextField
from kivy.lang import Builder

username_input = """
MDTextField:
    hint_text: "Posa el usuari"
    helper_text: "o clica aquí si has perdut el usuari"
    helper_text_mode: "on_focus"
    pos_hint:{'center_x': 0.5, 'center_y': 0.5}
    size_hint_x:None
    width:300
"""
class demoLogin(MDApp):

    def build(self):
        screen = Screen()
        self.theme_cls.primary_palette= "Orange"
        # username = MDTextField(text='Posa el usuari', #Text que volem que aparegui al "input"
        #                             pos_hint={'center_x':0.5, 'center_y':0.5},  #Centrarem 
        #                             size_hint_x= None, width=300) #Aportarem marge al input i el farem responsive
        # screen.add_widget(username)
        username = Builder.load_string(username_input)
        screen.add_widget(username)
        return screen

demoLogin().run()