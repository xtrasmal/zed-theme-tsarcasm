function globalFunction({ options = {} }) {
  const { minLength } = options;

  /**
   * @description Validator
   * @param {string?} value - parameter description
   */
  const localFunction = value => {
    let isValid = value?.length >= minLength ?? 3; // line comment
    /* Block comment */
    isValid = isValid && (/^\d.[A-F]+$/i).test(value);
    return {
      isValid,
    };
  };
}

@defineElement("download-button")
class DownloadButton extends HTMLButtonElement {
  static STATIC_FIELD = `<span title="HTML injection">${globalVariable}</span>`;

  static get observedAttributes() {
    return [ 'data-test' ];
  }

  #field = { prop: 1 };

  method() {
    this.click();

    label:
      while (true) {
        break label;
      }
  }
}

export const EXPORTED_VARIABLE = 1;
export function exportedFunction() {}
export class ExportedClass {}

const globalVariable = "chars\n\u11";

function JsxComponent() {
  return <JsxClientComponent />;
}

W
