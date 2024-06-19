import os
import openai

# Remplacez 'votre_cle_api' par votre clé API OpenAI
openai.api_key = 'API_KEY'

# Mettre la langue voulu
baseLang = 'fr'
newLang = 'en'

def translate_text(text, target_language=newLang):
    try:
        response = openai.ChatCompletion.create(
            model="gpt-3.5-turbo",
            messages=[
                {"role": "system", "content": f"You are a translator. Translate the following PHP variable value to {target_language}."},
                {"role": "user", "content": text}
            ]
        )
        return response.choices[0].message['content'].strip()
    except Exception as e:
        print(f"Error translating text: {text}. Error: {e}")
        return text

def translate_file(source_file, target_file, target_language=newLang):
    print(f'Translating file: {source_file} to {target_file}')
    try:
        with open(source_file, 'r', encoding='utf-8') as f:
            content = f.readlines()

        translated_content = []
        for line in content:
            if '=' in line:
                parts = line.split('=', 1)
                key = parts[0]
                value = parts[1].strip().strip(';').strip('\'"')
                translated_value = translate_text(value, target_language)
                translated_line = f"{key} = '{translated_value}';\n"
                translated_content.append(translated_line)
            else:
                translated_content.append(line)

        with open(target_file, 'w', encoding='utf-8') as f:
            f.writelines(translated_content)
        print(f'File translated: {target_file}')
    except Exception as e:
        print(f"Error translating file: {source_file}. Error: {e}")

def translate_directory(source_dir, target_dir, target_language=newLang):
    print(f'Translating directory: {source_dir} to {target_dir}')
    if not os.path.exists(target_dir):
        os.makedirs(target_dir)

    for root, _, files in os.walk(source_dir):
        for file in files:
            if file.endswith('.php'):
                source_file = os.path.join(root, file)
                relative_path = os.path.relpath(source_file, source_dir)
                target_file = os.path.join(target_dir, relative_path)
                os.makedirs(os.path.dirname(target_file), exist_ok=True)
                translate_file(source_file, target_file, target_language)

source_directory = 'src/assets/lang/' + baseLang  # Remplacez par votre chemin source
target_directory = 'src/assets/lang/' + newLang  # Remplacez par votre chemin cible

translate_directory(source_directory, target_directory)
print('Translation complete')
