from kivy.lang import Builder
from kivy.uix.screenmanager import Screen
from kivymd.app import MDApp

# your layouts
Builder.load_string(
    '''
#:import Window kivy.core.window.Window
#:import IconLeftWidget kivymd.uix.list.IconLeftWidget
<info@TwoLineAvatarListItem>
    IconLeftWidget:
        source: "shield.jpg"
<MyBackdropFrontLayer@info>
    backdrop: None
    text: "Usuari"
    secondary_text: "Correu de l'usuari"
    tertiary_text: 'Teléfon'   
    on_press: root.backdrop.open(-Window.height / 2)
    pos_hint: {"top": 1}
    _no_ripple_effect: True
<MyBackdropBackLayer@Image>
    size_hint: .8, .8
    source: "shield.jpg"
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
        title: "Vista Usuari (normal)"
        radius_left: "25dp"
        radius_right: "0dp"
        header_text: "Dades"
        
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


TestBackdrop().run()

