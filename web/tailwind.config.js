/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
  "./*.{html,js}",
  "./src/**/*.{html,js}", // Assuming your source files are in a `src` directory
  "!./node_modules",       // Exclude `node_modules`
  "!./build",              // Exclude `build`
  "!./dist",               // Exclude `dist`
  "!./.*"                  // Exclude hidden directories
],

  theme: {
    extend: {
      colors: {
        "general-white": "#fff",
        "general-8-secondary": "#000",
        darkslategray: "#333",
        "general-1-secondary": "#0e163d",
        "general-1-primary": "#a29061",
        "general-1-secondary-variant": "#414562",
        "elements-neutral-2": "#bfd4e4",
        gray: {
          "100": "rgba(255, 255, 255, 0.75)",
          "200": "rgba(0, 0, 0, 0.4)",
          "300": "rgba(255, 255, 255, 0.6)",
          "400": "rgba(255, 255, 255, 0.5)",
        },
        silver: "#c4c4c4",
        "general-9-secondary-variant": "#686868",
        "elements-neutral-4": "#f2f7f9",
        dimgray: "rgba(104, 104, 104, 0.75)",
        "dark-gray": "#262626",
        "elements-neutral-3": "#ddeaf3",
        "general-7-secondary-variant": "#343434",
        darkolivegreen: "#8a7847",
        "general-1-primary-variant": "#92643a",
      },
      spacing: {},
      fontFamily: {
        montserrat: "Montserrat",
        "button-dm-sans-16": "'DM Sans'",
        "heading-1-72": "'Playfair Display'",
        "body-b3-merriweather-14": "Merriweather",
        "subtitles-16": "Poppins",
        "primary-paragraph-paragraph-5": "'Eudoxus Sans'",
        "paragraph-16": "'Open Sans'",
        inherit: "inherit",
      },
      borderRadius: {
        xl: "20px",
        "83xl-4": "102.4px",
      },
    },
    fontSize: {
      xs: "12px",
      base: "16px",
      "41xl": "60px",
      "17xl": "36px",
      "29xl": "48px",
      sm: "14px",
      smi: "13px",
      lg: "18px",
      "35xl": "54px",
      "24xl": "43px",
      "13xl": "32px",
      "5xl": "24px",
      lgi: "19px",
      "53xl": "72px",
      "39xl": "58px",
      "3xl": "22px",
      "11xl": "30px",
      inherit: "inherit",
    },
    screens: {
      mq1875: {
        raw: "screen and (max-width: 1875px)",
      },
      mq1500: {
        raw: "screen and (max-width: 1500px)",
      },
      mq1425: {
        raw: "screen and (max-width: 1425px)",
      },
      mq1225: {
        raw: "screen and (max-width: 1225px)",
      },
      lg: {
        max: "1200px",
      },
      mq1050: {
        raw: "screen and (max-width: 1050px)",
      },
      mq950: {
        raw: "screen and (max-width: 950px)",
      },
      mq850: {
        raw: "screen and (max-width: 850px)",
      },
      mq750: {
        raw: "screen and (max-width: 750px)",
      },
       mq650: {
        raw: "screen and (max-width: 650px)",
      },
      mq450: {
        raw: "screen and (max-width: 450px)",
      },

      minq450:{
        raw: "screen and (min-width: 450px)",
      },

    },
  },
  corePlugins: {
    preflight: true,
  },
};
