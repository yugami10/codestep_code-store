/** イベントの詳細 */

/**
 * ハンバーガーメニューをクリック時のモーダル切替
 */
const switchHambergerMenuModal = () => {
    const body = document.querySelector('body')
    if (body.classList.contains('hambarger-open')) {
        body.classList.remove('hambarger-open')
    } else {
        body.classList.add('hambarger-open')
    }
}

/**
 * ハンバーガーアイコンを押下
 * @param {*} e
 */
const clickHambarger = (e) => {
    switchHambergerMenuModal()
}

/** イベント一覧 */

/**
 * 初回ロード時に実行
 * @param {*} e
 */
const domContentLoaded = (e) => {
    const hambarger = document.querySelector('.hambarger-icon')
    hambarger.addEventListener('click', clickHambarger)
}

document.addEventListener('DOMContentLoaded', domContentLoaded)