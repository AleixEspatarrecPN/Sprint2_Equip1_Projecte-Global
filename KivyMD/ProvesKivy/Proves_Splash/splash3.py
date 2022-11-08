from kivy.lang import Builder
from kivymd.app import MDApp
from kivy.core.window import Window

Window.size = (350,600)

KV = '''
BoxLayout:
    HotReloadViewer:
        path: app.path_to_kv_file
        errors: Trie
'''