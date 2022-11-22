from kivy.lang import Builder
from kivymd.app import MDApp
from kivymd.uix.boxlayout import MDBoxLayout
from kivymd.theming import ThemableBehavior
from kivymd.uix.list import MDList
from kivymd.uix.list import OneLineIconListItem
from kivy.uix.scrollview import ScrollView
from kivy.core.window import Window
from kivy.utils import platform
from kivymd.uix.screen import MDScreen
from kivy.properties import ObjectProperty
from kivymd.uix.scrollview import MDScrollView
from kivy.clock import Clock
from kivymd.app import MDApp
from kivymd.uix.screen import Screen
from kivymd.uix.datatables import MDDataTable
from kivy.metrics import dp
from kivymd.app import MDApp
from kivymd.uix.screen import Screen
from kivymd.uix.datatables import MDDataTable
from kivy.metrics import dp
from kivy.lang import Builder
from kivy.uix.screenmanager import Screen
from kivymd.app import MDApp
from kivy.lang import Builder
from kivy.clock import Clock
from kivy.uix.screenmanager import ScreenManager
from kivymd.app import MDApp
from kivy.core.window import Window

class ContentNavigationDrawer(MDBoxLayout):
    manager = ObjectProperty()
    nav_drawer = ObjectProperty()
      

class DrawerList(ThemableBehavior, MDList):
    def set_color_item(self, instance_item):

        # Set the color of the icon and text for the menu item.
        for item in self.children:
            if item.text_color == self.theme_cls.primary_color:
                item.text_color = self.theme_cls.text_color
                break
        instance_item.text_color = self.theme_cls.primary_color
        


class MyApp (MDApp):    
    def build(self):
        self.title = "PymeShield"
        Window.size = (400, 600)
        scroll = ScrollView()

        list_view = MDList()
        for i in range(20):

            items = OneLineIconListItem(text=str(i) + ' item')
            list_view.add_widget(items)

        scroll.add_widget(list_view)

        return Builder.load_file("main2.kv")



class DemoApp(MDApp):

    def build(self):
        screen = Screen()
        data_table = MDDataTable(pos_hint={'center_x': 0.5, 'center_y': 0.5},
                                 size_hint=(0.9, 0.6),
                                 check=True,
                                 rows_num=10,
                                 column_data=[
                                     ("ID", dp(18)),
                                     ("Usuari", dp(20)),
                                     ("Rol", dp(20))
                                 ],
                                 row_data=[
                                     ("1", "Usuari1", "Admin"),
                                     ("2", "Usuari2", "Client"),
                                     ("3", "Usuari3", "Client"),
                                     ("4", "Usuari4", "Admin"),
                                     ("5", "Usuari5", "Worker"),
                                     ("6", "Usuari6", "Admin"),
                                     ("7", "Usuari7", "Admin"),
                                     ("8", "Usuari8", "Worker")

                                 ]
                                 )
        data_table.bind(on_row_press=self.on_row_press)
        data_table.bind(on_check_press=self.on_check_press)
        screen.add_widget(data_table)
        return screen

    def on_row_press(self, instance_table, instance_row):
        print(instance_table, instance_row)

    def on_check_press(self, instance_table, current_row):
        print(instance_table, current_row)

class MyApp2 (MDApp):    
    def build(self):
        self.title = "PymeShield"
        Window.size = (400, 600)
        scroll = ScrollView()

        list_view = MDList()
        for i in range(20):

            items = OneLineIconListItem(text=str(i) + ' item')
            list_view.add_widget(items)

        scroll.add_widget(list_view)

        return Builder.load_file("main3.kv")

#Login
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

#Perfil usuari

Builder.load_string(
    '''
#:import Window kivy.core.window.Window
#:import IconLeftWidget kivymd.uix.list.IconLeftWidget
<info@TwoLineAvatarListItem>
    icon: "android"
    
    IconLeftWidget:
        icon: root.icon
<MyBackdropFrontLayer@info>
    backdrop: None
    text: "Usuari"
    secondary_text: "Correu"
    tertiary_text:'Teléfon'
    icon: "transfer-down"
    on_press: root.backdrop.open(-Window.height / 2)
    pos_hint: {"top": 1}
    _no_ripple_effect: True
<MyBackdropBackLayer@Image>
    size_hint: .8, .8
    source: "descarga.jpeg"
    pos_hint: {"center_x": .5, "center_y": .6}
  
'''
)

# Usage example of MDBackdrop.
Builder.load_string(
    '''
<ExampleBackdrop>
    
    MDBackdrop:
        id: backdrop
        left_action_items: [['menu', lambda x: self.open()]]
        title: "Dades"
        radius_left: "25dp"
        radius_right: "0dp"
        header_text: "Menu"
        
        MDBackdropBackLayer:
            MyBackdropBackLayer:
                id: backlayer
        
        MDBackdropFrontLayer:
            MyBackdropFrontLayer:
                backdrop: backdrop    
'''
)


class ExampleBackdrop(Screen):
    pass


class TestBackdrop(MDApp):
    def __init__(self, **kwargs):
        super().__init__(**kwargs)

    def build(self):
        return ExampleBackdrop()

#Splash

Window.fullscreen = False

########################################################################
## SET WINDOW SIZE
########################################################################
Window.size = (350, 600)
# Window.fullscreen = True
########################################################################
## MAIN CLASS
########################################################################
class MainApp(MDApp):
    # Global screen manager variable
    global screen_manager
    screen_manager = ScreenManager()
    
    ########################################################################
    ## Build Function
    ########################################################################
    def build(self):
        # Set App Title
        self.title=" Splash APP"
            
        # Load kv screen files to builder
        screen_manager.add_widget(Builder.load_file("splashScreen.kv"))
        screen_manager.add_widget(Builder.load_file("mainScreen.kv"))
        
        # Return screen manager
        return screen_manager
    ########################################################################
    ## This function runs on app start
    ########################################################################
    def on_start(self):
        # Delay time for splash screen before transitioning to main screen
        Clock.schedule_once(self.change_screen, 20) # Delay for 10 seconds
        
    ########################################################################
    ## This function changes the current screen to main screen
    ########################################################################
    def change_screen(self, dt):    
        screen_manager.current = "MainScreen"
        
        
########################################################################
## RUN APP
########################################################################      
MainApp().run()
demoLogin3().run()
MyApp().run()
DemoApp().run()
MyApp2().run()
TestBackdrop().run()